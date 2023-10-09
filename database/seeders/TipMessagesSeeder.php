<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $messages = [
            "What small act of kindness did someone do for you today that you're grateful for?",
            "What achievement or progress, no matter how small, are you thankful for today?",
            "What moment today brought you a sense of peace or contentment?",
            "Who in your life has been a source of inspiration recently, and why are you grateful for them?",
            "What part of nature's beauty did you pause to appreciate today?",
            "What's something you usually take for granted but felt thankful for today?",
            "What's a challenge or obstacle you faced today that you're grateful for because it taught you something valuable?",
            "What role has gratitude played in your day today, and how has it affected your mindset?",
            "Who is someone you're looking forward to expressing your gratitude to, and what will you say?",
            "What's one thing you're thankful for right now that you didn't have or didn't exist a year ago?",
        ];

        foreach ($messages as $message) {
            DB::table('tip_messages')->insert([
                'message' => $message,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}