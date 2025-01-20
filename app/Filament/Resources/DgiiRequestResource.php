<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DgiiRequestResource\Pages;
use App\Models\DgiiRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DgiiRequestResource extends Resource
{
    protected static ?string $model = DgiiRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('sequence_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('security_code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('signature_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('signed_xml')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('xml_path')
                    ->maxLength(255),
                Forms\Components\TextInput::make('request'),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('sequence_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
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
            'index' => Pages\ListDgiiRequests::route('/'),
            'create' => Pages\CreateDgiiRequest::route('/create'),
            'view' => Pages\ViewDgiiRequest::route('/{record}'),
            'edit' => Pages\EditDgiiRequest::route('/{record}/edit'),
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
