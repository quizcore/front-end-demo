<?php

// Sample user Array

$users = [
    [
        'fname' => 'User',
        'lname' => '1',
        'email' => 'easy@gmail.com',
        'dob' => '03/12/2000',
        'userId' => '0001'
    ]
];

// Sample Questions Array with Difficulty, Answer Choices, and Topics
$questions = [
    [
        'question' => '1 easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Var',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '2 medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Rec',
        'correctedAnswer' => 'B. int num = 10;'
    ],
    [
        'question' => '3 hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'S ing Algo',
        'correctedAnswer' => 'C. 1'
    ],
    [
        'question' => '4 very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sor Alg thms',
        'correctedAnswer' => 'C. I understand a little'
    ],
    [
        'question' => '5 easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Varbles',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '6 medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Resion',
        'correctedAnswer' => 'B. int num = 10;'
    ],
    [
        'question' => '7 hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'Sorti orithms',
        'correctedAnswer' => 'C. 1'
    ],
    [
        'question' => '8 very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sortg Algthms',
        'correctedAnswer' => 'C. I understand a little'
    ],
    [
        'question' => '9 easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Vaaes',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '10 medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Recursion',
        'correctedAnswer' => 'B. int num = 10;'
    ],
    [
        'question' => '11 hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'Sorting Algorithms',
        'correctedAnswer' => 'C. 1'
    ],
    [
        'question' => '12 very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sothms',
        'correctedAnswer' => 'C. I understand a little'
    ],
    [
        'question' => '13 easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Var',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '14 medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Rec',
        'correctedAnswer' => 'B. int num = 10;'
    ],
    [
        'question' => '15 hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'S ing Algo',
        'correctedAnswer' => 'C. 1'
    ],
    [
        'question' => '16 very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sor Alg thms',
        'correctedAnswer' => 'C. I understand a little'
    ],
    [
        'question' => '17 easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Varbles',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '18 medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Resion',
        'correctedAnswer' => 'B. int num = 10;'
    ],
    [
        'question' => '19 hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'Sorti orithms',
        'correctedAnswer' => 'C. 1'
    ],
    [
        'question' => '20 very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sortg Algthms',
        'correctedAnswer' => 'C. I understand a little'
    ],
    [
        'question' => '21 easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Vaaes',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '22 medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Recursion',
        'correctedAnswer' => 'B. int num = 10;'
    ],
    [
        'question' => '23 hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'Sorting Algorithms',
        'correctedAnswer' => 'C. 1',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '24 very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sothms',
        'correctedAnswer' => 'C. I understand a little'
    ],
    [
        'question' => '1a easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Var',
        'correctedAnswer' => 'A. 4',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '2a medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Rec',
        'correctedAnswer' => 'B. int num = 10;',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '3a hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'S ing Algo',
        'correctedAnswer' => 'C. 1'
    ],
    [
        'question' => '4a very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sor Alg thms',
        'correctedAnswer' => 'C. I understand a little'
    ],
    [
        'question' => '5a easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Varbles',
        'correctedAnswer' => 'A. 4',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '6a medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Resion',
        'correctedAnswer' => 'B. int num = 10;',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '7a hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'Sorti orithms',
        'correctedAnswer' => 'C. 1'
    ],
    [
        'question' => '8a very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sortg Algthms',
        'correctedAnswer' => 'C. I understand a little',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '9a easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Vaaes',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '10a medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Recursion',
        'correctedAnswer' => 'B. int num = 10;',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '11a hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'Sorting Algorithms',
        'correctedAnswer' => 'C. 1'
    ],
    [
        'question' => '12a very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sothms',
        'correctedAnswer' => 'C. I understand a little',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '13a easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Var',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '14a medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Rec',
        'correctedAnswer' => 'B. int num = 10;',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '15a hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'S ing Algo',
        'correctedAnswer' => 'C. 1',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '16a very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sor Alg thms',
        'correctedAnswer' => 'C. I understand a little',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '17a easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Varbles',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '18a medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Resion',
        'correctedAnswer' => 'B. int num = 10;'
    ],
    [
        'question' => '19a hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'Sorti orithms',
        'correctedAnswer' => 'C. 1',
        'codeSnippetImage' => '',
    ],
    [
        'question' => '20a very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sortg Algthms',
        'correctedAnswer' => 'C. I understand a little',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '21a easy Determine the output of the following code snippet:',
        'answers' => ['A. 4', 'B. 5', 'C. 0', 'D. 1'],
        'difficulty' => 'easy',
        'topic' => 'Vaaes',
        'correctedAnswer' => 'A. 4'
    ],
    [
        'question' => '22a medium Which of the following is a correct syntax for declaring a variable in Java?',
        'answers' => ['A. var num = 10;', 'B. int num = 10;', 'C. variable num = 10'],
        'difficulty' => 'medium',
        'topic' => 'Recursion',
        'correctedAnswer' => 'B. int num = 10;',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '23a hard What is the result of 7 modulo 3?',
        'answers' => ['A. 4', 'B. 3', 'C. 1'],
        'difficulty' => 'hard',
        'topic' => 'Sorting Algorithms',
        'correctedAnswer' => 'C. 1',
        'codeSnippetImage' => 'img/image.png',
    ],
    [
        'question' => '24a very hard Implement a sorting algorithm.',
        'answers' => ['A. I strongly understand', 'B. I understand', 'C. I understand a little', 'D. I don\'t understand'],
        'difficulty' => 'very hard',
        'topic' => 'Sothms',
        'correctedAnswer' => 'C. I understand a little',
        'codeSnippetImage' => 'img/image.png',
    ],
];
