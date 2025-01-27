<?php

namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;

trait MigrationTrait
{
    /**
     * @param Blueprint $table
     * @param bool $hasSoftDelete
     * @return void
     */
    public function addCommonFields(Blueprint $table, bool $hasSoftDelete = true): void
    {
        $table->id();

        $table->text('description')->nullable();

        $table->timestamps();

        if ($hasSoftDelete) {
            $table->softDeletes();
        }
    }

    /**
     * @param Blueprint $table
     * @param string|null $foreignModelFqn
     * @param bool $nullable
     * @param string|null $foreignKey
     * @param string|null $foreignTable
     * @return void
     */
    public function addForeignKey(Blueprint $table, bool $nullable = false, ?string $foreignModelFqn = null, ?string $foreignKey = null, ?string $foreignTable = null): void
    {
        if($nullable) {
            $table->foreignUuid($foreignKey)->nullable();
        }
        else
        {
            if(is_null($foreignModelFqn)) {
                $table->foreignUuid($foreignKey)->constrained($foreignTable)->cascadeOnDelete();
            } else {
                $table->foreignIdFor($foreignModelFqn)->constrained()->cascadeOnDelete();
            }
        }
    }
}
