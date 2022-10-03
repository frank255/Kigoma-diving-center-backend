<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingsResource\Pages;
use App\Filament\Resources\BookingsResource\RelationManagers;
use App\Models\Bookings;
use App\Models\Services;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class BookingsResource extends Resource
{
    protected static ?string $model = Bookings::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('booking_reference')
                    ->required()
                    ->default(Str::random(6))
                    ->disabled(),
                Forms\Components\TextInput::make('fullname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('whatsapp')
                    ->required()
                    ->maxLength(255),
                Select::make('services')
                    ->options(Services::all()->pluck('name', 'id'))
                    ->searchable()
                    ->multiple()
                    ->required()
                    ->disablePlaceholderSelection(),

                Forms\Components\DatePicker::make('start')
                    ->required(),
                Forms\Components\DatePicker::make('end')
                    ->required(),
                Forms\Components\TextInput::make('total_cost')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('booking_reference'),
                Tables\Columns\TextColumn::make('fullname'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('whatsapp'),
                Tables\Columns\TextColumn::make('services'),
                Tables\Columns\TextColumn::make('start')
                    ->date(),
                Tables\Columns\TextColumn::make('end')
                    ->date(),
                Tables\Columns\TextColumn::make('total_cost'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBookings::route('/create'),
            'edit' => Pages\EditBookings::route('/{record}/edit'),
        ];
    }
}
