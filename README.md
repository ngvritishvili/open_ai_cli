# Open AI CLI integration

Integrate AI CLI for you laravel project to communicate with open AI directly from command line.

## Requirements
1. Laravel ^10
 
## Install

`composer require ngvritishvili/open_ai_cli:dev-main --with-all-dependencies`

After installation run command to install open-ai: `php artisan openai:install` \
Add variable in .env file : 

`OPENAI_API_KEY=` \
`OPENAI_ORGANIZATION=` \
`OPENAI_REQUEST_TIMEOUT=`

You can generate key from open-ai "https://platform.openai.com/api-keys" \
And organization : "https://platform.openai.com/account/organization" 

## Usage

You can start chat with AI with artisan command : `ai-cli:chat`

## Congratulation
 Good luck