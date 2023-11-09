import './bootstrap';
import Alpine from 'alpinejs'
import hotspots from './alpine-hotspots.js'

Alpine.data('hotspots', hotspots)
window.Alpine = Alpine
Alpine.start()
