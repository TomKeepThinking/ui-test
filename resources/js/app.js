import './bootstrap';

document.addEventListener('alpine:init', () => {
    Alpine.data('dropdown', () => ({
        popup: '',
        loaded: false,

        calcPopupLocation(id) {
            let el = document.getElementById('popup-' + id);
                // return 'right-0';
        }
    }))
})
