<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use App\Models\Cert;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Rules\Cert\ValidateCertPassword;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CertResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Actions\Filament\Table\Columns\DateAtColumns;
use App\Filament\Resources\CertResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class CertResource extends Resource
{
    protected static ?string $model = Cert::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return __('Cert');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Certs');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('path')
                    ->required()
                    ->acceptedFileTypes(['application/x-pkcs12'])
                    ->disk('local')
                    ->directory(function () {
                        return 'certs';
                    })
                    ->translateLabel()
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file) {
                        return (string) str($file->getClientOriginalName())->prepend(date('Ymd') . '-');
                    }),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->translateLabel()
                    ->rules([
                        function (Get $get) {
                            $files = $get('path');
                            return new ValidateCertPassword(reset($files)->get());
                        }
                    ]),
                Forms\Components\DatePicker::make('due_date')
                    ->native(false)
                    ->required()
                    ->displayFormat('d-m-Y')
                    ->translateLabel(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->translateLabel()
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('due_date')
                    ->translateLabel()
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCerts::route('/'),
            'create' => Pages\CreateCert::route('/create'),
            'view' => Pages\ViewCert::route('/{record}'),
            'edit' => Pages\EditCert::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
