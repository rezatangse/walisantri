<?php

namespace App\Filament\Resources\Santris\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class SantrisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //nis
                TextColumn::make('nis')
                ->label('NIS')
                ->searchable(),

                //nama
                TextColumn::make('nama')
                ->label('Nama Santri')
                ->searchable(),

                //kelas
                TextColumn::make('kelas')
                ->label('Kelas'),

                //nama wali
                TextColumn::make('nama_wali')
                ->label('Nama Wali')
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
