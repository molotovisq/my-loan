<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Loan;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    public function run()
    {
        $conversations = [
            [
                [
                    'sender' => 'provider',
                    'content' => 'Quando você pode me pagar?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Só posso pagar daqui a 15 dias.',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Desse jeito fica complicado, você não tem como pagar antes?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Infelizmente, esse é o prazo que consigo no momento.',
                ],
            ],
            [
                [
                    'sender' => 'provider',
                    'content' => 'Você tem como adiantar o pagamento?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Estou com dificuldades financeiras, não posso pagar agora.',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Isso é um problema, você não teme que o processo fique mais complicado se não pagar logo?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Eu entendo, mas realmente não tenho outra opção no momento.',
                ],
            ],
            [
                [
                    'sender' => 'provider',
                    'content' => 'O prazo está se esgotando, você pretende pagar o valor total ou vai parcelar?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Eu preciso de mais 7 dias para conseguir juntar o dinheiro.',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Você sabe que o processo pode ficar complicado, temos que resolver isso logo.',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Sim, eu sei. Vou tentar resolver o mais rápido possível.',
                ],
            ],
            [
                [
                    'sender' => 'provider',
                    'content' => 'Já passou do prazo de pagamento, qual sua previsão para quitar a dívida?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Ainda não tenho condições, preciso de mais tempo.',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Você está ciente de que o atraso pode gerar juros e mais complicação, não é?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Sim, eu sei. Vou tentar resolver o mais rápido possível.',
                ],
            ],
            [
                [
                    'sender' => 'provider',
                    'content' => 'Você gostaria de prorrogar o pagamento?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Sim, mas se eu atrasar mais, o que pode acontecer?',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Existem implicações legais que podem gerar complicações no futuro, mas podemos tentar negociar.',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Entendo, mas não tenho mais como prorrogar, preciso de um prazo maior.',
                ],
            ],
            [
                [
                    'sender' => 'provider',
                    'content' => 'Acho que você está esquecendo da nossa dívida. Quando vai pagar?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Estou tentando juntar o dinheiro, mas vai demorar um pouco.',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Não podemos esperar muito tempo, você sabe que uma "diligência" pode ser o próximo passo.',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Eu prefiro não enfrentar uma "diligência". Vou pagar assim que possível!',
                ],
            ],
            [
                [
                    'sender' => 'provider',
                    'content' => 'Você não vai querer que a cobrança seja feita pessoalmente, vai?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Não, claro que não! Quero resolver isso o mais rápido possível.',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Porque da última vez a cobrança foi... digamos... impactante para o bolso.',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Eu sei, eu sei. Vou quitar o quanto antes!',
                ],
            ],
            [
                [
                    'sender' => 'provider',
                    'content' => 'Eu só queria um sinal de que vai pagar, algo que me faça acreditar em você.',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Eu estou realmente tentando, você só precisa me dar mais um pouco de tempo.',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Se você continuar assim, posso até mandar a "diligência" para te ajudar a encontrar o dinheiro.',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Acho que vou evitar esse tipo de ajuda. Já estou correndo atrás do dinheiro!',
                ],
            ],
            [
                [
                    'sender' => 'provider',
                    'content' => 'Estou ficando preocupado. Você quer que eu traga uma "cobrança pessoal" para você?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Não, não é necessário! Por favor, não!',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Porque da última vez a cobrança foi... digamos... impactante para o bolso.',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Eu sei, eu sei. Vou quitar o quanto antes!',
                ],
            ],
            [
                [
                    'sender' => 'provider',
                    'content' => 'Você está me deixando no "escuro" aqui. Quando vai pagar?',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Eu entendo sua preocupação, mas estou esperando um pouco mais.',
                ],
                [
                    'sender' => 'provider',
                    'content' => 'Você sabe que se não pagar logo, eu posso até ter que "aparecer pessoalmente".',
                ],
                [
                    'sender' => 'client',
                    'content' => 'Eu realmente espero que isso não aconteça! Vou resolver logo, prometo.',
                ],
            ],
        ];

        // Get all loan_id's from database
        $loanIds = Loan::pluck('id');

        foreach ($loanIds as $loanId) {
            // Choose a conversation randomly
            $conversation = $conversations[array_rand($conversations)];

            // Creates a complete conversation associated with an loan_id
            foreach ($conversation as $message) {
                Message::create([
                    'sender' => $message['sender'],
                    'loan_id' => $loanId,
                    'content' => $message['content'],
                ]);
            }
        }
    }
}
