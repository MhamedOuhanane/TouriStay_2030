<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 390"  {{ $attributes }}>>
       <!-- Background gradient -->
       <defs>
        <linearGradient id="bgGradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#121212" />
            <stop offset="100%" stop-color="#2A2A2A" />
        </linearGradient>
        <linearGradient id="glowGradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#02D870" stop-opacity="0.6" />
            <stop offset="100%" stop-color="#02D870" stop-opacity="0" />
        </linearGradient>
    </defs>
    
    <!-- Background -->
    <rect width="100%" height="100%" fill="url()" />

    <!-- Glow effect -->
    <circle cx="250" cy="158" r="120" fill="url(#glowGradient)" />
    
    <!-- Abstract map design - minimal, modern lines - CENTRÉE -->
    <g stroke="#ffffff" stroke-opacity="0.15" stroke-width="2">
        <path d="M150 70 L350 70" />
        <path d="M150 120 L350 120" />
        <path d="M150 170 L350 170" />
        <path d="M150 220 L350 220" />
        <path d="M150 270 L350 270" />
        <path d="M150 70 L150 270" />
        <path d="M200 70 L200 270" />
        <path d="M250 70 L250 270" />
        <path d="M300 70 L300 270" />
        <path d="M350 70 L350 270" />
    </g>

    <!-- Modern blocks with 3D effect - CENTRÉS -->
    <g>
        <!-- Red blocks -->
        <rect x="170" y="90" width="60" height="60" fill="#FF5252" opacity="0.9" rx="4" ry="4" />
        <rect x="270" y="90" width="60" height="60" fill="#FF5252" opacity="0.9" rx="4" ry="4" />
        <rect x="170" y="190" width="60" height="60" fill="#FF5252" opacity="0.9" rx="4" ry="4" />
        
        <!-- Green blocks -->
        <rect x="270" y="190" width="60" height="60" fill="#00E676" opacity="0.9" rx="4" ry="4" />
    </g>

    <!-- Location pin with subtle shadow -->
    <circle cx="250" cy="158" r="30" fill="inherit" opacity="0.1" />
    <circle cx="250" cy="158" r="15" fill="#ffffff" />
    <path d="M250 143 C237 143, 230 153, 230 163 C230 178, 250 193, 250 193 C250 193, 270 178, 270 163 C270 153, 263 143, 250 143 Z" fill="#00E676" />
    <circle cx="250" cy="158" r="5" fill="#ffffff" />

    <!-- Logo text - Modern Sans-Serif Font -->
    <text x="250" y="50" font-family="Arial, sans-serif" font-size="50" font-weight="900" text-anchor="middle" fill="#007C3F" letter-spacing="2">TouriStay</text>
    
    <!-- Year with gradient effect -->
    <text x="250" y="340" font-family="Arial, sans-serif" font-size="70" font-weight="900" text-anchor="middle" fill="#00E676" letter-spacing="4">2030</text>

    <!-- Tagline -->
    <text x="250" y="390" font-family="Arial, sans-serif" font-size="18" font-weight="300" text-anchor="middle" fill="#000000" letter-spacing="3">MOROCCO · SPAIN · PORTUGAL</text>
    
    <!-- Minimal flag icons -->
    <g transform="translate(212, 350) scale(0.5)">
        <circle cx="0" cy="0" r="20" fill="#E63946" />
        <path d="M0 -12 L4 -4 L13 -4 L6 2 L9 10 L0 4 L-9 10 L-6 2 L-13 -4 L-4 -4 Z" fill="#1A8D44" />
    </g>
    
    <g transform="translate(250, 350) scale(0.5)">
        <rect x="-20" y="-12" width="40" height="24" fill="#FFDA44" />
        <rect x="-20" y="-12" width="40" height="8" fill="#D80027" />
        <rect x="-20" y="4" width="40" height="8" fill="#D80027" />
    </g>

    <g transform="translate(292, 350) scale(0.5)">
        <rect x="-20" y="-12" width="40" height="24" fill="#006614" />
        <rect x="-20" y="-12" width="13" height="24" fill="#D80027" />
        <circle cx="-3.5" cy="0" r="6" fill="#FFDA44" stroke="#000000" stroke-width="1" />
    </g>
</svg>