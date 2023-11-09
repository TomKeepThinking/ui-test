import './bootstrap';

document.addEventListener('alpine:init', () => {
    Alpine.data('dropdown', () => ({
        popup: '',
        loaded: false,

        calcPopupLocation(id) {
            let el = document.getElementById('popup-' + id);


            console.log('isOff', id, el.offsetWidth )
            console.log('isOff', id, el.offsetLeft )

                // return 'right-0';
        }
    }))
})
