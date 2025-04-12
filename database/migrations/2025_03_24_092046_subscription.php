<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\SubscriptionType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('subscription_id')->unique();
            $table->enum('subscription_type', SubscriptionType::values())->default(SubscriptionType::FREE->value);
            $table->integer('mock_tests_count')->default(0);
            $table->string('subscription_status');
            $table->timestamp('subscription_start_date');
            $table->timestamp('subscription_end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
