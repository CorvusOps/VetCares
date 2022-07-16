function expandMenu(){
    /*
     * Expand or shrink navigation bar links
     */
    const btn = document.querySelector('.mobileMenuBtn');
    const menu = document.querySelector('.mobile-menu');
    
    btn.name === 'close-outline' ? (btn.name = "menu-outline", menu.classList.add('hidden')) : (btn.name="close-outline", menu.classList.remove('hidden'))

}