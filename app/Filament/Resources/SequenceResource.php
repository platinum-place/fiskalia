<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\Sequence;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\Sequence\TypeEnum;
use Filament\Resources\Resource;
use App\Enums\Sequence\StatusEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SequenceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Actions\Filament\Table\Columns\DateAtColumns;

class SequenceResource extends Resource
{
    protected static ?string $model = Sequence::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return __('Sequence');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Sequences');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('range_start')
                    ->translateLabel()
                    ->required()
                    ->numeric()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('next_number', $state))
                    ->live(true),
                Forms\Components\TextInput::make('range_end')
                    ->translateLabel()
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->translateLabel()
                    ->options(StatusEnum::class),
                Select::make('type')
                    ->translateLabel()
                    ->options(TypeEnum::class),
                Forms\Components\TextInput::make('next_number')
                    ->translateLabel()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('series')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('length')
                    ->translateLabel()
                    ->required()
                    ->numeric()
                    ->default(10),
                DatePicker::make('due_date')
                    ->translateLabel()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(
                DateAtColumns::run([
                    Tables\Columns\TextColumn::make('series')
                        ->translateLabel(),
                    Tables\Columns\TextColumn::make('next_number')
                        ->translateLabel()
                        ->numeric(),
                    Tables\Columns\TextColumn::make('status')
                        ->translateLabel(),
                    Tables\Columns\TextColumn::make('type')
                        ->translateLabel(),
                    Tables\Columns\TextColumn::make('due_date')
                        ->translateLabel(),
                ]))
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
            'index' => Pages\ListSequences::route('/'),
            'create' => Pages\CreateSequence::route('/create'),
            'view' => Pages\ViewSequence::route('/{record}'),
            'edit' => Pages\EditSequence::route('/{record}/edit'),
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
