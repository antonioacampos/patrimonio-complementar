<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocaluspSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locais = [
            ['codlocusp' => 2767, 'setor'=>'SET','nome'=>'Secretaria'],
            ['codlocusp' => 2778, 'setor'=>'SET','nome'=>'Sala de Aula SET01'],
            ['codlocusp' => 2779, 'setor'=>'SET','nome'=>'Hall de entrada'],
            ['codlocusp' => 2780, 'setor'=>'SET','nome'=>'Sanitário (M)-Térreo'],
            ['codlocusp' => 2781, 'setor'=>'SET','nome'=>'Copa'],
            ['codlocusp' => 2782, 'setor'=>'SET','nome'=>'Estar térreo'],
            ['codlocusp' => 2783, 'setor'=>'SET','nome'=>'Sanitário (F)-Térreo'],
            ['codlocusp' => 2784, 'setor'=>'SET','nome'=>''],
            ['codlocusp' => 2785, 'setor'=>'SET','nome'=>'Sala de aula SET02'],
            ['codlocusp' => 2828, 'setor'=>'SET','nome'=>'Sanitário (SUB SOLO)'],
            ['codlocusp' => 2829, 'setor'=>'SET','nome'=>'HALL-Subsolo'],
            ['codlocusp' => 2830, 'setor'=>'SET','nome'=>'Sala de aula SET03 (Subsolo)'],
            ['codlocusp' => 2831, 'setor'=>'SET','nome'=>'Auditório'],
            ['codlocusp' => 2837, 'setor'=>'SET','nome'=>'Prof Walter SAVASSI'],
            ['codlocusp' => 2838, 'setor'=>'SET','nome'=>'Prof ANA Lucia'],
            ['codlocusp' => 2839, 'setor'=>'SET','nome'=>'Depósito biblioteca'],
            ['codlocusp' => 2841, 'setor'=>'SET','nome'=>'Mestrado 3'],
            ['codlocusp' => 2842, 'setor'=>'SET','nome'=>'Mestrado 4'],
            ['codlocusp' => 2843, 'setor'=>'SET','nome'=>'Mestrado 5'],
            ['codlocusp' => 2845, 'setor'=>'SET','nome'=>'Mestrado 6'],
            ['codlocusp' => 2846, 'setor'=>'SET','nome'=>'Mestrado 7'],
            ['codlocusp' => 2847, 'setor'=>'SET','nome'=>'Mestrado 8'],
            ['codlocusp' => 2848, 'setor'=>'SET','nome'=>'Mestrado 1'],
            ['codlocusp' => 2849, 'setor'=>'SET','nome'=>'Depósito limpeza 1'],
            ['codlocusp' => 2850, 'setor'=>'SET','nome'=>'Mestrado 9'],
            ['codlocusp' => 2854, 'setor'=>'SET','nome'=>'Conservação e limpeza'],
            ['codlocusp' => 2861, 'setor'=>'SET','nome'=>'Deposito secretaria'],
            ['codlocusp' => 2863, 'setor'=>'SET','nome'=>'Prof André Teófilo Beck'],
            ['codlocusp' => 2865, 'setor'=>'SET','nome'=>'Prof MOUNIR El Debs'],
            ['codlocusp' => 2869, 'setor'=>'SET','nome'=>'Prof José Elias LAIER'],
            ['codlocusp' => 2870, 'setor'=>'SET','nome'=>'Prof Rodolfo André Kuche Sanches'],
            ['codlocusp' => 2872, 'setor'=>'SET','nome'=>'Prof Marcio CORREA'],
            ['codlocusp' => 2873, 'setor'=>'SET','nome'=>'Sanitário (M) -Superior'],
            ['codlocusp' => 2876, 'setor'=>'SET','nome'=>'Sanitário (F)-Superior'],
            ['codlocusp' => 2877, 'setor'=>'SET','nome'=>'Depósito limpeza'],
            ['codlocusp' => 2888, 'setor'=>'SET','nome'=>'Hall piso superior'],
            ['codlocusp' => 2891, 'setor'=>'SET','nome'=>'Depósito mobiliário'],
            ['codlocusp' => 2893, 'setor'=>'SET','nome'=>'Prof Rodrigo Ribeiro PACCOLA'],
            ['codlocusp' => 2895, 'setor'=>'SET','nome'=>'Sala de reunião 2'],
            ['codlocusp' => 2896, 'setor'=>'SET','nome'=>'Deposito setor 1'],
            ['codlocusp' => 2897, 'setor'=>'SET','nome'=>'Profa Marcela Novischi Kataoka'],
            ['codlocusp' => 2899, 'setor'=>'SET','nome'=>'Prof EDSON Denner Leonel'],
            ['codlocusp' => 2900, 'setor'=>'SET','nome'=>'Prof Vladimir Guilherme Haach'],
            ['codlocusp' => 2903, 'setor'=>'SET','nome'=>'Prof Ricardo CARRAZEDO'],
            ['codlocusp' => 2904, 'setor'=>'SET','nome'=>'Visitante 1'],
            ['codlocusp' => 2907, 'setor'=>'SET','nome'=>'Prof MAXimiliano Malite'],
            ['codlocusp' => 2908, 'setor'=>'SET','nome'=>'Prof JORGE Munaiar Neto'],
            ['codlocusp' => 2910, 'setor'=>'SET','nome'=>'Prof Marcio RAMALHO'],
            ['codlocusp' => 2911, 'setor'=>'SET','nome'=>'Pesquisador colaborador'],
            ['codlocusp' => 2912, 'setor'=>'SET','nome'=>'Prof Visitante 3'],
            ['codlocusp' => 2914, 'setor'=>'SET','nome'=>'Prof Roberto L A BARBATO'],
            ['codlocusp' => 2915, 'setor'=>'SET','nome'=>'Prof ADAIR Aguiar'],
            ['codlocusp' => 2917, 'setor'=>'SET','nome'=>'Depósito setor 2'],
            ['codlocusp' => 2918, 'setor'=>'SET','nome'=>'Prof João Batista de PAIVA'],
            ['codlocusp' => 2919, 'setor'=>'SET','nome'=>'Prof Alessandra Castro'],
            ['codlocusp' => 2921, 'setor'=>'SET','nome'=>'Prof Rogério Carrazedo'],
            ['codlocusp' => 2922, 'setor'=>'SET','nome'=>'Visitante 2'],
            ['codlocusp' => 2923, 'setor'=>'SET','nome'=>'Prof Humberto Breves CODA'],
            ['codlocusp' => 2935, 'setor'=>'SET','nome'=>'Francisco Brito'],
            ['codlocusp' => 2940, 'setor'=>'SET','nome'=>'Banheiro deficiente'],
            ['codlocusp' => 3969, 'setor'=>'SET','nome'=>'Sala de reunião 1'],
            ['codlocusp' => 5790, 'setor'=>'SET','nome'=>'Prof SERGIO Proença'],
            ['codlocusp' => 5791, 'setor'=>'SET','nome'=>'Deposito setor 3'],
            ['codlocusp' => 21192, 'setor'=>'SET','nome'=>'WC Masc'],
            ['codlocusp' => 21193, 'setor'=>'SET','nome'=>'WC Masculino deficiente'],
            ['codlocusp' => 21194, 'setor'=>'SET','nome'=>'Doutorandos'],
            ['codlocusp' => 21195, 'setor'=>'SET','nome'=>'WC Feminino deficiente'],
            ['codlocusp' => 21196, 'setor'=>'SET','nome'=>'Sacivil'],
            ['codlocusp' => 21345, 'setor'=>'SET','nome'=>'WC Feminino subsolo'],
            ['codlocusp' => 21391, 'setor'=>'SET','nome'=>'Mestrado 2'],
            ['codlocusp' => 24373, 'setor'=>'SET','nome'=>''],
            ['codlocusp' => 4115, 'setor'=>'SET-LAMEM','nome'=>'Secretaria 20'],
            ['codlocusp' => 4116, 'setor'=>'SET-LAMEM','nome'=>'WC Fem'],
            ['codlocusp' => 4117, 'setor'=>'SET-LAMEM','nome'=>'Copa'],
            ['codlocusp' => 4118, 'setor'=>'SET-LAMEM','nome'=>'WC Masc'],
            ['codlocusp' => 4119, 'setor'=>'SET-LAMEM','nome'=>'Roberto 21'],
            ['codlocusp' => 4122, 'setor'=>'SET-LAMEM','nome'=>'Base de dados 22'],
            ['codlocusp' => 4123, 'setor'=>'SET-LAMEM','nome'=>'Sala de rack 21'],
            ['codlocusp' => 4124, 'setor'=>'SET-LAMEM','nome'=>'Sala de silos 18'],
            ['codlocusp' => 4125, 'setor'=>'SET-LAMEM','nome'=>'Funcionario 17'],
            ['codlocusp' => 4126, 'setor'=>'SET-LAMEM','nome'=>'Sala climatizada'],
            ['codlocusp' => 4127, 'setor'=>'SET-LAMEM','nome'=>'Sala de colagem'],
            ['codlocusp' => 4132, 'setor'=>'SET-LAMEM','nome'=>'Sala de reunião'],
            ['codlocusp' => 4324, 'setor'=>'SET-LAMEM','nome'=>'Salão de ensaios'],
            ['codlocusp' => 4347, 'setor'=>'SET-LAMEM','nome'=>'Bolsista 06'],
            ['codlocusp' => 4348, 'setor'=>'SET-LAMEM','nome'=>'Bolsista 07'],
            ['codlocusp' => 4349, 'setor'=>'SET-LAMEM','nome'=>'Bolsista 08'],
            ['codlocusp' => 4350, 'setor'=>'SET-LAMEM','nome'=>'WC Fem'],
            ['codlocusp' => 4351, 'setor'=>'SET-LAMEM','nome'=>'WC Masc'],
            ['codlocusp' => 4352, 'setor'=>'SET-LAMEM','nome'=>'Saida passarela'],
            ['codlocusp' => 4353, 'setor'=>'SET-LAMEM','nome'=>'Bolsista 10'],
            ['codlocusp' => 4354, 'setor'=>'SET-LAMEM','nome'=>'Bolsista 11'],
            ['codlocusp' => 4355, 'setor'=>'SET-LAMEM','nome'=>'Bolsista 12'],
            ['codlocusp' => 4356, 'setor'=>'SET-LAMEM','nome'=>'Bolsista 13'],
            ['codlocusp' => 4357, 'setor'=>'SET-LAMEM','nome'=>'Bolsista 14'],
            ['codlocusp' => 4358, 'setor'=>'SET-LAMEM','nome'=>'Prof Francisco Antonio Rocco Lahr  05'],
            ['codlocusp' => 4359, 'setor'=>'SET-LAMEM','nome'=>''],
            ['codlocusp' => 4360, 'setor'=>'SET-LAMEM','nome'=>'Prof Antônio Alves Dias 03'],
            ['codlocusp' => 4361, 'setor'=>'SET-LAMEM','nome'=>'Prof aposentado 02'],
            ['codlocusp' => 4362, 'setor'=>'SET-LAMEM','nome'=>'Sala de aula 01'],
            ['codlocusp' => 4363, 'setor'=>'SET-LAMEM','nome'=>'Marcenaria'],
            ['codlocusp' => 4364, 'setor'=>'SET-LAMEM','nome'=>'Depósito de madeiras'],
            ['codlocusp' => 4365, 'setor'=>'SET-LAMEM','nome'=>'WC oficina'],
            ['codlocusp' => 4366, 'setor'=>'SET-LAMEM','nome'=>'Sala técnicos'],
            ['codlocusp' => 4367, 'setor'=>'SET-LAMEM','nome'=>'Almoxarifado oficina'],
            ['codlocusp' => 11943, 'setor'=>'SET-LAMEM','nome'=>''],
            ['codlocusp' => 2786, 'setor'=>'SET-LE','nome'=>'Laboratório de Estruturas'],
            ['codlocusp' => 2787, 'setor'=>'SET-LE','nome'=>'Sala de Técnicos'],
            ['codlocusp' => 2788, 'setor'=>'SET-LE','nome'=>'Câmara climatizada'],
            ['codlocusp' => 2817, 'setor'=>'SET-LE','nome'=>'Câmara úmida'],
            ['codlocusp' => 2819, 'setor'=>'SET-LE','nome'=>'Vestiário'],
            ['codlocusp' => 2821, 'setor'=>'SET-LE','nome'=>'Oficina mecânica'],
            ['codlocusp' => 2855, 'setor'=>'SET-LE','nome'=>'sonelastic era Jorge Brabo'],
            ['codlocusp' => 2943, 'setor'=>'SET-LE','nome'=>'Sala Vareda'],
            ['codlocusp' => 2945, 'setor'=>'SET-LE','nome'=>'Galpão de ensaios'],
            ['codlocusp' => 5451, 'setor'=>'SET-LE','nome'=>'Depósito de ferramentas'],
            ['codlocusp' => 5452, 'setor'=>'SET-LE','nome'=>'Depósito de equipamentos'],
            ['codlocusp' => 5785, 'setor'=>'SET-LE','nome'=>'Depósito laboratório'],
            ['codlocusp' => 5786, 'setor'=>'SET-LE','nome'=>'Sala de reunião'],
            ['codlocusp' => 5787, 'setor'=>'SET-LE','nome'=>'Abrigo das bombas hidráulicas'],
            ['codlocusp' => 5788, 'setor'=>'SET-LE','nome'=>'Instron 1'],
            ['codlocusp' => 5789, 'setor'=>'SET-LE','nome'=>'Instron 2'],
            ['codlocusp' => 21199, 'setor'=>'SET-LE','nome'=>'Concretagem'],
            ['codlocusp' => 24372, 'setor'=>'SET-LE','nome'=>'Abrigo das máquinas'],
            ['codlocusp' => 2834, 'setor'=>'SET-LIMC','nome'=>'Processamento 1'],
            ['codlocusp' => 2836, 'setor'=>'SET-LIMC','nome'=>'Processamento 2 - Masaki'],
            ['codlocusp' => 2890, 'setor'=>'SET-LIMC','nome'=>'Dorival'],
            ['codlocusp' => 2906, 'setor'=>'SET-LIMC','nome'=>'Deposito'],
            ['codlocusp' => 2926, 'setor'=>'SET-LIMC','nome'=>'Sala de técnicos'],
            ['codlocusp' => 2931, 'setor'=>'SET-LIMC','nome'=>'Sala do cluster'],
            ['codlocusp' => 2936, 'setor'=>'SET-LIMC','nome'=>'WEB - Melina'],
            ['codlocusp' => 5418, 'setor'=>'SET-LIMC','nome'=>'Sala de manutenção'],
            ['codlocusp' => 21198, 'setor'=>'SET-LIMC','nome'=>'Ensino Informatizado'],
            ['codlocusp' => 8189, 'setor'=>'SET-LMCC','nome'=>'Depósito 1'],
            ['codlocusp' => 8190, 'setor'=>'SET-LMCC','nome'=>'Depósito 2'],
            ['codlocusp' => 8191, 'setor'=>'SET-LMCC','nome'=>'Área de concretagem'],
            ['codlocusp' => 12010, 'setor'=>'SET-LMCC','nome'=>'Sala de ensaios'],
            ['codlocusp' => 14716, 'setor'=>'SET-LMCC','nome'=>'Sala de ensaios'],
            ['codlocusp' => 20374, 'setor'=>'SET-LMCC','nome'=>'Copa'],
            ['codlocusp' => 20994, 'setor'=>'SET-LMCC','nome'=>'Sanitário F'],
            ['codlocusp' => 21102, 'setor'=>'SET-LMCC','nome'=>'Sanitário M'],
            ['codlocusp' => 21145, 'setor'=>'SET-LMCC','nome'=>'Câmara úmida'],
            ['codlocusp' => 21438, 'setor'=>'SET-LMCC','nome'=>'Galpão de ensaios'],
            ['codlocusp' => 21465, 'setor'=>'SET-LMCC','nome'=>'Bolsistas 4'],
            ['codlocusp' => 21913, 'setor'=>'SET-LMCC','nome'=>'Sala Forno'],
            ['codlocusp' => 21914, 'setor'=>'SET-LMCC','nome'=>'Sonelastic'],
            ['codlocusp' => 21915, 'setor'=>'SET-LMCC','nome'=>'Sala da prensa hidráulica'],
            ['codlocusp' => 21916, 'setor'=>'SET-LMCC','nome'=>'Bolsistas 5'],
            ['codlocusp' => 21917, 'setor'=>'SET-LMCC','nome'=>'Bolsistas 3'],
            ['codlocusp' => 21918, 'setor'=>'SET-LMCC','nome'=>'Bolsistas 2'],
            ['codlocusp' => 21919, 'setor'=>'SET-LMCC','nome'=>'Bolsistas 1'],
            ['codlocusp' => 26490, 'setor'=>'SET-LMCC','nome'=>'Técnicos'],
        ];
        \DB::table('localusps')->insert($locais);
    }
}
