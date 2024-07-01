


const fetchQuiz = () => {
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
