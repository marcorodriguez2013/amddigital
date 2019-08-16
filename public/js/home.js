$(window).load(function() {
    Vue.component('titulo', {
        template: `
        <div>
        <h1>numero : {{numero}}</h1>
        <hijo></hijo>
        </div>
        `,
        computed: { ...Vuex.mapState(['numero'])
        }
    })
    /* -----------------------------------------------*/
    Vue.component('hijo', {
        template: `
    <div>
    <button @click="aumentar">+</button>
    <button @click="disminuir">-</button>
    <h1>numero : {{numero}}</h1>
    </div>
    `,
        computed: { ...Vuex.mapState(['numero'])
        },
        methods: { ...Vuex.mapMutations(['aumentar', 'disminuir'])
        },
    })
    /* -----------------------------------------------*/
    const store = new Vuex.Store({
        state: {
            numero: 10
        },
        mutations: {
            aumentar() {
                this.state.numero++
            },
            disminuir() {
                this.state.numero--
            }
        }
    })
    /* -----------------------------------------------*/
    const app = new Vue({
        el: '#app',
        store: store,
    })
})