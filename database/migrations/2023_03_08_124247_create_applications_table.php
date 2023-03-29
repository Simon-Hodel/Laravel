<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('answer');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            return null;
        });
       /*
        Route::get('/event/applications', function () {
            $applications = \App\Models\Application::where('answer', 'yes')->get();
            $declineApplications = \App\Models\Application::where('answer', 'no')->count();
            return view('applications', [
                'applications' => $applications,
                'declinedApplications' => $declineApplications,
            ]);
        });
        */
    }


    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
