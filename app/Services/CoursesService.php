<?php

namespace App\Services;


class CoursesService extends BaseService
{
    public function getCourses() {
        
    }

    public function getTestTasks()
    {
        $tasks = [
            // Programming and Software Development
            [
                'json_content' => json_encode([
                    'questions' => [
                        ['question' => 'What is a variable?', 'options' => ['An object that stores a value', 'A command to execute an operation', 'A program file', 'A compiler directive'], 'answer' => 'An object that stores a value'],
                        ['question' => 'Which data type is used to store text in Python?', 'options' => ['int', 'float', 'str', 'list'], 'answer' => 'str'],
                        ['question' => 'What does the print() function do?', 'options' => ['Saves data', 'Executes code', 'Displays text on the screen', 'Ends the program'], 'answer' => 'Displays text on the screen'],
                        ['question' => 'How to create a list in Python?', 'options' => ['()', '[]', '{}', '\'\''], 'answer' => '[]'],
                        ['question' => 'What is a for loop?', 'options' => ['Conditional structure', 'Function', 'Loop with a predetermined number of iterations', 'Loop with a condition'], 'answer' => 'Loop with a predetermined number of iterations'],
                    ]
                ]),
                'title' => 'Python: Basics',
                'complexity' => 'easy',
                'course_id' => 1,
            ],
            [
                'json_content' => json_encode([
                    'questions' => [
                        ['question' => 'What is object-oriented programming?', 'options' => ['A style of writing code', 'Data model', 'Software development methodology', 'Programming language'], 'answer' => 'Software development methodology'],
                        ['question' => 'What is encapsulation?', 'options' => ['Data hiding', 'Creating objects', 'Class inheritance', 'Polymorphism'], 'answer' => 'Data hiding'],
                        ['question' => 'Which keyword is used to inherit classes in Python?', 'options' => ['inherit', 'extends', 'super', 'class'], 'answer' => 'class'],
                        ['question' => 'What is polymorphism?', 'options' => ['Creating objects', 'Data hiding', 'Using one interface for different types', 'Class inheritance'], 'answer' => 'Using one interface for different types'],
                        ['question' => 'How to declare a class in Python?', 'options' => ['def', 'class', 'object', 'new'], 'answer' => 'class'],
                    ]
                ]),
                'title' => 'Python: OOP',
                'complexity' => 'medium',
                'course_id' => 1,
            ],
            [
                'json_content' => json_encode([
                    'questions' => [
                        ['question' => 'Which method joins list elements into a single string?', 'options' => ['split()', 'join()', 'append()', 'extend()'], 'answer' => 'join()'],
                        ['question' => 'What is an exception in Python?', 'options' => ['Runtime error', 'Compilation error', 'Syntax error', 'Logical error'], 'answer' => 'Runtime error'],
                        ['question' => 'How to create an empty set in Python?', 'options' => ['{}', '[]', '()', 'set()'], 'answer' => 'set()'],
                        ['question' => 'Which operator is used to check if an element is in a list?', 'options' => ['in', 'of', 'contains', 'exists'], 'answer' => 'in'],
                        ['question' => 'What does the pop() method do in a list?', 'options' => ['Adds an element to the end of the list', 'Removes the last element of the list', 'Inserts an element at the beginning of the list', 'Clears the list'], 'answer' => 'Removes the last element of the list'],
                    ]
                ]),
                'title' => 'Python: Advanced Methods',
                'complexity' => 'medium',
                'course_id' => 1,
            ],
            [
                'json_content' => json_encode([
                    'questions' => [
                        ['question' => 'What is a lambda function in Python?', 'options' => ['Anonymous function', 'Function with multiple arguments', 'Function for file handling', 'Function for exception handling'], 'answer' => 'Anonymous function'],
                        ['question' => 'Which method sorts a list in place?', 'options' => ['sort()', 'sorted()', 'order()', 'arrange()'], 'answer' => 'sort()'],
                        ['question' => 'What does the map() function return?', 'options' => ['List', 'Set', 'Iterator', 'Tuple'], 'answer' => 'Iterator'],
                        ['question' => 'How to create a dictionary in Python?', 'options' => ['{}', '[]', '()', 'set()'], 'answer' => '{}'],
                        ['question' => 'What does the filter() function do?', 'options' => ['Filters elements of a sequence', 'Sorts elements of a sequence', 'Joins elements of a sequence', 'Splits elements of a sequence'], 'answer' => 'Filters elements of a sequence'],
                    ]
                ]),
                'title' => 'Python: Lambda and Higher-Order Functions',
                'complexity' => 'medium',
                'course_id' => 1,
            ],
            [
                'json_content' => json_encode([
                    'questions' => [
                        ['question' => 'What is a module in Python?', 'options' => ['A file containing Python definitions and statements', 'Part of an operating system', 'Special data type', 'Built-in function'], 'answer' => 'A file containing Python definitions and statements'],
                        ['question' => 'How to import a module in Python?', 'options' => ['import', 'include', 'require', 'load'], 'answer' => 'import'],
                        ['question' => 'Which module is used for file handling in Python?', 'options' => ['os', 'sys', 'file', 'path'], 'answer' => 'os'],
                        ['question' => 'What does the dir() function do?', 'options' => ['Returns a list of attributes and methods of an object', 'Creates a new directory', 'Deletes a file', 'Reads a file'], 'answer' => 'Returns a list of attributes and methods of an object'],
                        ['question' => 'What does the help() function do?', 'options' => ['Displays built-in documentation', 'Starts the Python interpreter', 'Compiles code', 'Deletes an object'], 'answer' => 'Displays built-in documentation'],
                    ]
                ]),
                'title' => 'Python: Working with Modules',
                'complexity' => 'medium',
                'course_id' => 1,
            ]
        ];
    }
}
