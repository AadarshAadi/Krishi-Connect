# 🌾 KRISHI CONNECT

> **Krishi Connect** is a smart agriculture portal designed to connect **farmers, customers, and administrators** through a single digital platform. It integrates crop trading, weather forecasting, agricultural news, AI assistance, and machine learning–powered farming support.

---

## 📌 Features

### 👨‍🌾 Farmer Module
- Farmer registration and login
- Add and manage crop listings
- Sell crops directly to customers
- View market-related information
- Access farming recommendations
- Weather forecasting support
- Agriculture news feed
- AI chatbot assistance
- Machine Learning–based crop insights

### 🛒 Customer Module
- Customer registration and login
- Browse and purchase crops
- Secure online payments (Stripe integration)
- Order management
- View farmer listings

### 🛠 Admin Module
- Manage farmers and customers
- Monitor crop listings
- Platform administration dashboard
- User and content management

### 🤖 Smart Integrations
- OpenWeather API for forecasts
- News API for agriculture news
- OpenAI integration for chatbot support
- ML models for agricultural recommendations

---

## 🧰 Tech Stack

### Frontend
- HTML5
- CSS3
- JavaScript
- Bootstrap

### Backend
- PHP
- MySQL

### Machine Learning
- Python
- NumPy
- Pandas
- Scikit-learn

### APIs / Services
- OpenWeatherMap API
- News API
- Stripe Payment Gateway
- OpenAI API
- SMTP Email Service

---

## 📂 Project Structure

```bash
KRISHI-CONNECT/
│
├── admin/                    # Admin panel
├── customer/                 # Customer portal
├── farmer/                   # Farmer module + ML scripts
├── db/                       # Database SQL files
├── smtp/                     # Email/OTP functionality
├── css/
├── js/
├── images/
├── index.php                 # Landing page
└── README.md
```

---

# ⚙️ Installation & Setup

## 1️⃣ Clone Repository

```bash
git clone https://github.com/vaishnavid0604/agriculture-portal.git
cd agriculture-portal
```

---

## 2️⃣ Move Project to XAMPP

Copy project folder into:

```bash
C:/xampp/htdocs/
```

(Optional rename folder)

```bash
agriculture-portal -> krishi-connect
```

---

## 3️⃣ Start XAMPP

Start:

- Apache
- MySQL

---

## 4️⃣ Configure Database

1. Open phpMyAdmin
2. Create a new database:

```sql
krishi_connect
```

3. Import SQL file from:

```bash
/db
```

4. Update database credentials if needed.

Example:

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "krishi_connect";
```

---

## 5️⃣ Install Python Dependencies

Navigate to farmer module:

```bash
cd farmer
pip install -r requirements.txt
```

If requirements file is missing:

```bash
pip install numpy pandas scikit-learn
```

---

## 6️⃣ Add API Keys

Configure your keys in relevant files:

| Service | File |
|--------|------|
| News API | fnewsfeed.php |
| OpenWeather | fweather_forecast.php |
| Stripe | customer/stripePayment/config.php |
| OpenAI | index.php / fchatgpt.php |

---

## 7️⃣ Configure SMTP (OTP Email)

Update:

- fsend_otp.php
- csend_otp.php

```php
$mail->Username = "your_email@gmail.com";
$mail->Password = "your_app_password";
```

Use Gmail App Password.

---

## 8️⃣ Configure Stripe URLs

Update:

```php
customer/cbuy_crops.php
```

```php
'success_url' => 'http://localhost/krishi-connect/customer/cupdatedb.php',
'cancel_url'  => 'http://localhost/krishi-connect/customer/cbuy_crops.php',
```

---

## 🚀 Run Project

Open browser:

```bash
http://localhost/krishi-connect/
```

---

# 🔐 Environment Variables (Recommended)

Create a `.env` file:

```env
NEWS_API_KEY=your_key
WEATHER_API_KEY=your_key
OPENAI_API_KEY=your_key
STRIPE_SECRET_KEY=your_key
SMTP_EMAIL=your_email
SMTP_PASSWORD=your_app_password
```

---

# 🧪 Sample Login Roles

## Admin
```text
Username: admin
Password: admin123
```

## Farmer
Register through farmer portal.

## Customer
Register through customer portal.

---

# 🔮 Future Enhancements

- Mobile app support
- Multilingual farmer assistance
- Crop disease detection using AI
- IoT sensor integration
- Real-time mandi price tracking
- Government scheme recommendations

---

# 🐛 Troubleshooting

## Apache not starting
- Check port conflicts (80/443)
- Stop Skype/IIS if needed

## Database connection errors
- Verify credentials
- Ensure MySQL running
- Reimport SQL file

## Python models failing
- Install dependencies
- Check Python path
- Test scripts individually

## APIs not working
- Verify keys
- Check request limits

---

# 👩‍💻 Author

Developed by **Aadarsh Mishra**  
Project Name: **KRISHI CONNECT** 🌱

---

## ⭐ Support

If you like this project:

- Star the repository ⭐
- Fork it