    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('py-2');
                nav.classList.remove('py-5');
            } else {
                nav.classList.add('py-5');
                nav.classList.remove('py-2');
            }
        });

        // Mobile Menu Toggle Logic
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');
        let isMobileMenuOpen = false;

        if (mobileBtn) {
            mobileBtn.addEventListener('click', () => {
                isMobileMenuOpen = !isMobileMenuOpen;
                if (isMobileMenuOpen) {
                    mobileMenu.classList.remove('hidden');
                    setTimeout(() => {
                        mobileMenu.classList.remove('opacity-0', 'translate-y-10');
                        mobileMenu.classList.add('opacity-100', 'translate-y-0');
                    }, 10);
                    iconMenu.classList.add('hidden');
                    iconClose.classList.remove('hidden');
                } else {
                    mobileMenu.classList.remove('opacity-100', 'translate-y-0');
                    mobileMenu.classList.add('opacity-0', 'translate-y-10');
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                    }, 500);
                    iconClose.classList.add('hidden');
                    iconMenu.classList.remove('hidden');
                }
            });
        }

        // Banner Slider Logic
        let currentSlide = 0;
        const slides = document.querySelectorAll('.banner-slide');
        
        function showSlide(index) {
            if (slides.length === 0) return;
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('opacity-0', 'z-10');
                    slide.classList.add('opacity-100', 'z-20');
                } else {
                    slide.classList.remove('opacity-100', 'z-20');
                    slide.classList.add('opacity-0', 'z-10');
                }
            });
        }
        
        function nextSlide() {
            if (slides.length === 0) return;
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }
        
        function prevSlide() {
            if (slides.length === 0) return;
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Auto-advance slider
        if (slides.length > 0) {
            setInterval(nextSlide, 6000);
        }

        // Counter Animation Logic
        const animateCounters = () => {
            const counters = document.querySelectorAll('.counter');
            const speed = 150; 
            
            counters.forEach(counter => {
                if(counter.classList.contains('animated')) return;
                
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 20);
                    } else {
                        counter.innerText = target;
                        counter.classList.add('animated');
                    }
                };
                updateCount();
            });
        }

        // Scroll Reveal Observer Logic
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-8', 'translate-y-12', '-translate-x-12', 'translate-x-12');
                    entry.target.classList.add('opacity-100', 'translate-y-0', 'translate-x-0');
                    
                    if(entry.target.querySelector('.counter')) {
                        setTimeout(animateCounters, 200);
                    }
                    
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));

        // FAQ Accordion Logic
        document.querySelectorAll('.faq-button').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('.faq-icon');
                const isOpen = answer.style.maxHeight;

                // Close all other answers
                document.querySelectorAll('.faq-answer').forEach(ans => {
                    ans.style.maxHeight = null;
                    const otherIcon = ans.previousElementSibling.querySelector('.faq-icon');
                    if (otherIcon) {
                        otherIcon.innerText = '+';
                        otherIcon.style.transform = 'rotate(0deg)';
                    }
                });

                // Toggle current answer
                if (!isOpen) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    icon.innerText = '−';
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });
    </script>
