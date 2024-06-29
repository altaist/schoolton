import { computed, ref } from 'vue'

const tmpCourses = {
    'student': [
        {id: 1, title: 'Ton basic', subTitle: 'Description for this course', icon: 'fa-brands fa-telegram', price: 20, tags: ['ton', 'crypto']},
        {id: 2, title: 'Integrals', subTitle: 'Description for this course', icon: 'fa-solid fa-wave-square', price: 35, tags: ['math']},
    ],
    'expert': [
        {id: 1, title: 'My simple course', subTitle: 'Description for this course', icon: 'fa-brands fa-telegram', price: 5, tags: ['users']},
        {id: 2, title: 'How work hard and be happy', subTitle: 'Description for this course', icon: 'fa-solid fa-wave-square', price: 12, tags: ['work', 'health']},
    ],
}

const useCourses = () => {

    const loadCourses = async () => tmpCourses;

    const getCourses = (mode = 'student') => {
        console.log(tmpCourses[mode], mode)
        return tmpCourses[mode];
    }

    const getCoursesForStudent = (userId) => {
        return getCourses();
    }

    const getCoursesForExpert = (userId) => {
        return getCourses('expert');
    }

    return {
        getCourses,
        getCoursesForExpert,
        getCoursesForStudent
    }
}

export default useCourses
