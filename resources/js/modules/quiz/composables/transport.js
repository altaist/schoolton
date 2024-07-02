
const fetchQuiz = () => {
    return {
        "title": "Python: Basics",
        "qs": [
            {
                "txt": "What is a variable?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "An object that stores a value"
                    },
                    {
                        "idx": 1,
                        "txt": "A command to execute an operation"
                    },
                    {
                        "idx": 2,
                        "txt": "A program file"
                    },
                    {
                        "idx": 3,
                        "txt": "A compiler directive"
                    }
                ],
                "as": [0]
            },
            {
                "txt": "Which data type is used to store text in Python?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "int"
                    },
                    {
                        "idx": 1,
                        "txt": "float"
                    },
                    {
                        "idx": 2,
                        "txt": "str"
                    },
                    {
                        "idx": 3,
                        "txt": "list"
                    }
                ],
                "as": [2]
            },
            {
                "txt": "What does the print() function do?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "Saves data"
                    },
                    {
                        "idx": 1,
                        "txt": "Executes code"
                    },
                    {
                        "idx": 2,
                        "txt": "Displays text on the screen"
                    },
                    {
                        "idx": 3,
                        "txt": "Ends the program"
                    }
                ],
                "as": [2]
            },
            {
                "txt": "How to create a list in Python?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "()"
                    },
                    {
                        "idx": 1,
                        "txt": "[]"
                    },
                    {
                        "idx": 2,
                        "txt": "{}"
                    },
                    {
                        "idx": 3,
                        "txt": "''"
                    }
                ],
                "as": [1]
            },
            {
                "txt": "What is a for loop?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "Conditional structure"
                    },
                    {
                        "idx": 1,
                        "txt": "Function"
                    },
                    {
                        "idx": 2,
                        "txt": "Loop with a predetermined number of iterations"
                    },
                    {
                        "idx": 3,
                        "txt": "Loop with a condition"
                    }
                ],
                "as": [2]
            }
        ],
        "settings": {
            "repeat": 0,
            "showErrors": false,
            "auto": false,
            "looping": true,
            "onlyForward": false
        }
    }
}

const fetchQuiz2 = () => {
    return {
        title: "Quiz title",
        qs: [
            {
                txt: 'Question 1',
                vs: [
                    {
                        idx: 0,
                        txt: 'Variant 1',
                    },
                    {
                        idx: 1,
                        txt: 'Variant 2',
                    },
                    {
                        idx: 3,
                        txt: 'Variant 3',
                    },
                    {
                        idx: 4,
                        txt: 'Variant 4',
                    },
                ],
                as: [1]
            },
            {
                txt: 'How many 10 in 300?',
                vs: [
                    {
                        idx: 0,
                        txt: '10',
                    },
                    {
                        idx: 1,
                        txt: '20',
                    },
                    {
                        idx: 3,
                        txt: '30',
                    },
                    {
                        idx: 4,
                        txt: '40',
                    },
                ],
                as: [3]
            },
        ],
        settings: {
            repeat: 0,
            showErrors: false,
            auto: false,
            looping: true,
            onlyForward: false
        }


    };
}


export {
    fetchQuiz
}
