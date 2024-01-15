<?php

namespace AI\Console\Commands;

use AI\AI\Assistant;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use function Laravel\Prompts\outro;
use function Laravel\Prompts\info;
use function Laravel\Prompts\spin;

class ChatCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ai-cli:chat {--system=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start a chat with OpenAI';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $chat = new Assistant();

        if ($this->option('system')) {
            $chat->systemMessage($this->option('system'));
        }

        $question = text(
            label: 'What is your question for AI?',
            required: true
        );

        info(
            spin(fn() => $chat->send($question), 'Sending request...')
        );

        while ($question = text('Do you want to respond?')) {
            info(
                spin(fn() => $chat->send($question), 'Sending request...')
            );
        }

        outro('Conversation over.');
    }


}
