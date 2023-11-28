document.addEventListener('alpine:init', () => {
    Alpine.data('hotspots', () => ({
        popup: '',
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

                if(oldValue === 3) {
                    this.transformOrigin = {
                        left: 0
                    }

                    return;
                }
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


            this.timer = setInterval(() => {
                if (this.currentTab === 3) {
                    this.currentTab = 0;
                    this.currentTab = 1;
                } else {
                    this.currentTab++
                }
            }, 10000);
        },
        destroy() {
            // Detach the handler, avoiding memory and side-effect leakage
            clearInterval(this.timer);
        },

    }))

    Alpine.data('tabs', () =>({
        active: 1,
        isActive(tab) {
            return tab == this.active;
        },
        setActive(value) {
            this.active = value;
        }
    }))
})
