<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use Filament\Forms\Components\Select;
use App\Models\Booking;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use App\Models\Service;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('fullname')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nationality')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('no_people')
                    ->required(),
                TextInput::make('no_children'),
                Textarea::make('allergies')
                    ->maxLength(65535),
                Select::make('services')
                    ->options(Service::all()->pluck('name', 'id'))
                    ->preload()
                    ->multiple()
                    ->required()
                    ->disablePlaceholderSelection(),
                DatePicker::make('start')
                    ->required(),
                DatePicker::make('end')
                    ->required(),
                TextInput::make('info')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('booking_reference'),
                Tables\Columns\TextColumn::make('fullname'),
                Tables\Columns\TextColumn::make('nationality'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('no_people'),
                Tables\Columns\TextColumn::make('no_children'),
                Tables\Columns\TextColumn::make('allergies'),
                Tables\Columns\TextColumn::make('services'),
                Tables\Columns\TextColumn::make('start')
                    ->date(),
                Tables\Columns\TextColumn::make('end')
                    ->date(),
                Tables\Columns\TextColumn::make('info'),
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
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
