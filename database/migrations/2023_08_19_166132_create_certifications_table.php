<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string("imageCertification")->unique();
            $table->enum("division",["BACKEND","FRONTEND"]);

            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); //many to one ke user
            $table->foreignId('modules_id')->constrained('modules')->cascadeOnDelete();
            $table->timestamps();
                
            /**
             * sertifikat berelasi many to one dengan user [DONE]
             * sertifikat berelasi many to many dengan course [DONE]
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};
