# WeatherAPI
A simple and efficient API built to provide real-time and forecasted weather data for any location worldwide.

## 🧰 Tech Stack

- **Backend**: laravel/framework: ^12.0
- **Frontend**: Next.js 14+ (React-based)
- **API Integration**: OpenWeatherMap
- 
📁 Project Structure Overview

WeatherAPI/
│
├── backend/                     # Laravel API (Weather Backend)
│   ├── app/                     # Core Laravel application (Controllers, Models, Services)
│   ├── bootstrap/
│   ├── config/
│   ├── database/                # Migrations, seeders
│   ├── public/
│   ├── resources/
│   │   └── views/             
│   ├── routes/
│   │   └── api.php              # API routes 
│   ├── tests/                   # PHPUnit tests
│   ├── .env                     # Laravel environment variables
│   ├── composer.json
│   └── README.md
│
├── frontend/                    # Next.js App (User Interface)
│   ├── components/              # Reusable UI components
│   ├── pages/                   # Routes/pages (e.g. index.js, city.js)
│   ├── public/                  # Static assets (images, icons, etc.)
│   ├── styles/                  # CSS/SCSS/Styled components
│   ├── utils/                   # Helper functions (e.g., API requests)
│   ├── hooks/                   # Custom React hooks
│   ├── .env.local               # Frontend environment variables
│   ├── next.config.js
│   ├── package.json
│   └── README.md
│
├── .gitignore
├── README.md                    # Main README for repo
└── LICENSE                      # Project license (e.g., MIT)
