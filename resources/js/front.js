import './bootstrap'

import { createApp } from 'vue'

import Lead from './components/front/Lead.vue'
import Quiz from './components/front/Quiz.vue'

const app = createApp({})

app.component('create-lead', Lead)
app.component('quiz', Quiz)

app.mount('#front')