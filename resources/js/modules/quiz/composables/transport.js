


const fetchQuiz = () => {
    return {
        title: "Название задания",
        qs: [
            {
                txt: 'Вопрос 1',
                vs: [
                    {
                        idx: 0,
                        txt: 'Вариант1',
                    },
                    {
                        idx: 1,
                        txt: 'Вариант2',
                    },
                    {
                        idx: 3,
                        txt: 'Вариант3',
                    },
                    {
                        idx: 4,
                        txt: 'Вариант4',
                    },
                ],
                as: [1]
            },
            {
                txt: 'Сколько десятков в числе 300?',
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
