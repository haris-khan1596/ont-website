<?php

use App\Models\Domain;
use App\Models\Publication;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_publication', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Publication::class,'pub_id');
            $table->foreignIdFor(Domain::class, 'd_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domain_publication');
    }
};
