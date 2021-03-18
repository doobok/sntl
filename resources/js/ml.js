import Vue from 'vue'
import { MLInstaller, MLCreate, MLanguage } from 'vue-multilanguage'

Vue.use(MLInstaller)

export default new MLCreate({
  initial: 'ru',
  languages: [
    new MLanguage('ru').create({
        search: 'Поиск',
        readmore: 'Подробнее',

    }),

    new MLanguage('uk').create({
        search: 'Пошук',
        readmore: 'Детальніше',

    }),

    new MLanguage('en').create({
        search: 'Search',
        readmore: 'More details',

    }),
  ]
})
