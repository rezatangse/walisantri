<?php

namespace App\Filament\Resources\Santris\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;

class SantriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Santri')
                ->schema([
                    //nama
                    TextInput::make('nama')
                    ->label('Nama lengkap')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                    //nis
                    TextInput::make('nis')
                    ->label('NIS')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                    //kelas
                    TextInput::make('kelas')
                    ->label('Kelas')
                    ->required()
                    ->maxLength(255),

                    //angkatan
                    TextInput::make('angkatan')
                    ->label('Angkatan')
                    ->required()
                    ->maxLength(255),

                    //tanggal_lahir
                    DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                ]),
                Section::make('Data Orang Tua / Wali')
                ->schema([
                    //nama_ayah
                    TextInput::make('nama_wali')
                    ->label('Nama Wali')
                    ->required()
                    ->maxLength(255),

                    //kontak_ayah
                    TextInput::make('kontak_wali')
                    ->label('Kontak Wali')
                    ->required()
                    ->maxLength(255),

                    //alamat
                    Textarea::make('alamat')
                    ->label('Alamat')
                    ->required()
                    ->rows(5)
                    ->cols(10)
                ]),
            ]);
    }
}
