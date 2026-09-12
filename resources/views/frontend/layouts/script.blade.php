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

       <!-- Script for Reveal Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.course-reveal, .scroll-reveal').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

    
    <script>
        function filterBatches(category) {
            // Update buttons
            const btns = document.querySelectorAll('.batch-tab-btn');
            btns.forEach(btn => {
                if(btn.getAttribute('data-category') === category) {
                    btn.classList.remove('text-slate-500', 'hover:text-brand-dark', 'hover:bg-slate-50', 'font-medium');
                    btn.classList.add('bg-white', 'text-brand-dark', 'shadow-sm', 'font-bold');
                } else {
                    btn.classList.add('text-slate-500', 'hover:text-brand-dark', 'hover:bg-slate-50', 'font-medium');
                    btn.classList.remove('bg-white', 'text-brand-dark', 'shadow-sm', 'font-bold');
                }
            });

            // Update rows with fade animation
            const rows = document.querySelectorAll('.batch-row');
            const tbody = document.getElementById('batch-table-body');
            
            tbody.style.opacity = '0';
            
            setTimeout(() => {
                rows.forEach(row => {
                    if(row.getAttribute('data-category') === category) {
                        row.classList.remove('hidden');
                    } else {
                        row.classList.add('hidden');
                    }
                });
                tbody.style.opacity = '1';
                tbody.style.transition = 'opacity 0.3s ease';
            }, 150);
            
            // Reset scroll position when tab changes
            const container = document.getElementById('table-scroll-container');
            if (container) {
                container.scrollTop = 0;
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.course-reveal, .scroll-reveal').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
