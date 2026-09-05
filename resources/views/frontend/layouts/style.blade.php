    <style>
        body { background-color: #fcfaf9; color: #110d0a; overflow-x: hidden; }
        
        /* Hide scrollbar for marquee */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        /* FAQ Smooth Collapse */
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Custom underline styles */
        .underline-gradient {
            position: relative;
            z-index: 1;
            display: inline-block;
        }
        .underline-gradient::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 0;
            width: 100%;
            height: 35%;
            background: linear-gradient(90deg, #ff5e00, #e62020);
            z-index: -1;
            transform: skewX(-15deg);
            border-radius: 2px;
        }

        /* Custom Solid Shadow for Neo-brutalism touch */
        .shadow-solid {
            box-shadow: 6px 6px 0px 0px #110d0a;
            transition: all 0.3s ease;
        }
        .shadow-solid:hover {
            box-shadow: 2px 2px 0px 0px #110d0a;
            transform: translate(4px, 4px);
        }
        
        .shadow-solid-colored {
            box-shadow: 8px 8px 0px 0px #ff5e00;
        }

        /* Scroll Reveal Utility */
        .scroll-reveal {
            transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Marquee Animations */
        @keyframes marquee-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
        @keyframes marquee-right {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(0); }
        }
        .animate-marquee-right {
            animation: marquee-right 40s linear infinite;
        }
    </style>
