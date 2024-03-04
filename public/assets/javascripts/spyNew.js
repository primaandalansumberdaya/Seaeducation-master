function makeNavLinksSmooth() {
    const navLinks = document.querySelectorAll('.li_prodit a');

    for (let link of navLinks) {
        link.addEventListener('click', e => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 50,
                    behavior: 'smooth'
                });
            }
        });
    }
}

function spyScrolling() {
    const sections = document.querySelectorAll('.content-profile');

    window.addEventListener('scroll', () => {
        const scrollPos = window.scrollY || document.documentElement.scrollTop;

        for (let section of sections) {
            const sectionId = section.id;
            const sectionOffset = section.offsetTop;
            const sectionHeight = section.offsetHeight;

            if (scrollPos >= sectionOffset - 50 && scrollPos < sectionOffset + sectionHeight) {
                document.querySelector('.active').classList.remove('active');
                document.querySelector(`a[href*=${id}]`).parentNode.classList.add('active');
            }
        }
    });
}

// Initialize smooth scrolling and scroll spy
makeNavLinksSmooth();
spyScrolling();
