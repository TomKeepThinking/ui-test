import './bootstrap';

document.addEventListener('alpine:init', () => {
    Alpine.data('dropdown', () => ({
        popup: '',
        loaded: false,
    }))

    Alpine.data('slider', () => ({
        currentTab: 1,
        tabs: [
            { id: 1, label: '01' },
            { id: 2, label: '02' },
            { id: 3, label: '03' },
        ],
        timer: null,
        transformOrigin: {
            left: 0
        },

        transformOrigin2: {
            left: 0
        },
        init() {

            this.$watch('currentTab', (newValue, oldValue) => {
               if(oldValue < newValue){
                    this.transformOrigin = {
                       left: 0
                    }

                   this.transformOrigin2 ={
                       right: 0
                   }
               } else {
                   this.transformOrigin2 ={
                      left: 0
                   }

                   this.transformOrigin = {
                       right: 0
                   }
               }
            })

            // Register an event handler that references the component instance
            // this.width = 100;

            // this.timer = setInterval(() => {
            //     if (this.currentTab === 3) {
            //         this.currentTab = 0;
            //         this.currentTab = 1;
            //     } else {
            //         this.currentTab++
            //     }
            // }, 2000);
        },
        destroy() {
            // Detach the handler, avoiding memory and side-effect leakage
            clearInterval(this.timer);
        },

    }))
})
