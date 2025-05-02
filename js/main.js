/**
// * Dodaje klasy do elementów sekwencyjnie z opóźnieniem
 //* @ param {string} selector - selektor CSS do znalezienia elementów
 //* @ param {string|string[]} classes - klasa/y do dodania
 //* @ param {number} delay - opóźnienie między elementami (ms)
 //* @ param {number} [initialDelay=0] - początkowe opóźnienie (ms)
 //*/


function addClassesSequentially(selector, classes, delay, initialDelay = 0) {
    const elements = document.querySelectorAll(selector);
    const classList = Array.isArray(classes) ? classes : [classes];

    elements.forEach((el, index) => {
        setTimeout(() => {
            classList.forEach(className => {
                el.classList.add(className);
            });
        }, initialDelay + index * delay);
    });
}
const burger = document.querySelector('.nav-burger');
const navList = document.querySelector('.nav-list');
const elementLi = document.querySelectorAll('.li-animatioan');
// navigation
burger.addEventListener('click', () => {
    burger.classList.toggle('nav-burger-avtive');
    navList.classList.toggle('nav-list-active');
    // console.log('click burger');
    addClassesSequentially('.li-animatioan', 'li-animatioan-active', 100);// header h1
    addClassesSequentially('.nav-list-img', 'nav-list-img-active', 100);// header h1

})



// Dodaj klasę 'dowolna' do wszystkich np.animation-enter co 200ms

setTimeout(() => {
    addClassesSequentially('.animation-enter', 'animation-enter-active-opacity', 170);// header h1
    addClassesSequentially('.animation-enter', 'animation-enter-active', 150);// header h1
    addClassesSequentially('.title-img-wrap ', 'title-img-wrap-active', 100); // header img
    addClassesSequentially('.border-container ', 'border-container-active', 70); // header black container
    addClassesSequentially('nav', 'nav-active', 0); // navigation
}, 1000);


//scroll animation
function animateOnScroll(selector, classes, delay, initialDelay = 0, offset = 0.5) {
    const elements = document.querySelectorAll(selector);
    if (elements.length === 0) return;

    let globalAnimationStart = null;

    function checkPosition() {
        const windowHeight = window.innerHeight;
        const triggerPoint = windowHeight * offset;
        const now = Date.now();

        elements.forEach((el, index) => {
            const rect = el.getBoundingClientRect();
            const elementTop = rect.top;
            const elementBottom = rect.bottom;

            if (elementTop <= triggerPoint && elementBottom >= 0) {
                if (!el.dataset.animated) {
                    // Ustaw czas startu animacji tylko dla pierwszego widocznego elementu
                    if (!globalAnimationStart) {
                        globalAnimationStart = now + initialDelay;
                    }

                    const animationTime = globalAnimationStart + (index * delay);
                    const timeUntilAnimation = Math.max(0, animationTime - now);

                    setTimeout(() => {
                        classes.forEach(className => {
                            el.classList.add(className);
                        });
                        el.dataset.animated = 'true';
                    }, timeUntilAnimation);
                }
            }
        });
    }

    window.addEventListener('scroll', checkPosition);
    window.addEventListener('resize', checkPosition);
    checkPosition();
}

// Przykład użycia:
// animateOnScroll('.my-element', ['animate-class'], 200, 0);
animateOnScroll('.animation-item', ['animation-item-active'], 200, 0, 0.6);
