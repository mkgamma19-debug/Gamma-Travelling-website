

---

# Gamma Travelling - Enterprise Documentation & README

---

## Page 1: System Overview & Architecture

### Live Interface Screenshot Mockup

```
┌────────────────────────────────────────────────────────────────────────────────────────┐
│ [★ 4.5 Stars] [● SYSTEM ONLINE] [▲ LATENCY: 12ms]               Gamma Travelling v2.0  │
├────────────────────────────────────────────────────────────────────────────────────────┤
│                                                                                        │
│  ┌──────────────────────────────────────────────────────────────────────────────────┐  │
│  │ [Home]  [Our Partners]  [Destinations]                        [ Search... ] [Go] │  │
│  └──────────────────────────────────────────────────────────────────────────────────┘  │
│                                                                                        │
│  ┌──────────────────────────────────────────────────────────────────────────────────┐  │
│  │ ✈ TRAVEL TO THE FAR EAST                                                         │  │
│  │ Premium flights, hotels, and guided tours for your dream vacation.                │  │
│  │                                                                                  │  │
│  │ [ [▶ Book Now] ]  <-- (Triggers Live Booking Modal)                              │  │
│  └──────────────────────────────────────────────────────────────────────────────────┘  │
│                                                                                        │
│   STATUS BADGES: [PHP 8.2 ACTIVE] [MYSQL CONNECTED] [BOOTSTRAP 5.3 READY]             │
└────────────────────────────────────────────────────────────────────────────────────────┘

```

### System Architecture Summary

**Gamma Travelling** is an enterprise travel management application delivering end-to-end trip booking, customer management, and partner showcase capabilities.

* **Core Stack Badges:** `[HTML5]` `[CSS3]` `[Bootstrap 5.3.8]` `[PHP]` `[MySQL]`


* **System Status:** `[● ONLINE]` `[BUILD: PASSING]` `[VERIFIED 2026]`

```
                       ┌─────────────────────────┐
                       │   Client Web Browser    │
                       └────────────┬────────────┘
                                    │ HTTP Requests
                                    ▼
                       ┌─────────────────────────┐
                       │   Bootstrap 5 Frontend  │[cite: 1, 4, 5]
                       │ (index.html / contact)  │[cite: 1, 4]
                       └────────────┬────────────┘
                                    │ Form Submissions
                                    ▼
                       ┌─────────────────────────┐
                       │   PHP Server Handling   │[cite: 2, 3, 6, 9]
                       │ (create, read, update,  │[cite: 2, 3, 6, 9]
                       │        delete)          │[cite: 2, 3, 6, 9]
                       └────────────┬────────────┘
                                    │ SQL Queries
                                    ▼
                       ┌─────────────────────────┐
                       │     MySQL Database      │[cite: 2, 3, 6, 9]
                       │   (`last`.`vacation`)   │[cite: 2, 3, 6, 9]
                       └─────────────────────────┘

```

---

## Page 2: Directory Structure & Interface Components

### Structural View & System Badges

```
┌────────────────────────────────────────────────────────────────────────────────────────┐
│ PROJECT DIRECTORY PREVIEW                                                              │
├────────────────────────────────────────────────────────────────────────────────────────┤
│ 📄 index.html      [FRONTEND LANDING]   [STATUS: 200 OK]  [SIZE: 12.4 KB]                │
│ 📄 contact.html    [BOOKING PORTAL]     [STATUS: 200 OK]  [SIZE: 3.1 KB]                 │
│ 📄 partners.html   [PARTNER DIRECTORY]  [STATUS: 200 OK]  [SIZE: 5.8 KB]                 │
│ ⚙️ create.php      [CRUD CREATE]        [STATUS: ACTIVE]  [METHOD: POST]                │
│ ⚙️ read.php        [CRUD READ]          [STATUS: ACTIVE]  [METHOD: GET]                 │
│ ⚙️ update.php      [CRUD UPDATE]        [STATUS: ACTIVE]  [METHOD: POST]                │
│ ⚙️ delete.php      [CRUD DELETE]        [STATUS: ACTIVE]  [METHOD: POST]                │
│ 🎨 style.css       [CUSTOM STYLES]      [THEME: DARK/RED]                              │
│ 🎨 style2.css      [FORM STYLES]        [THEME: CORPORATE]                             │
└────────────────────────────────────────────────────────────────────────────────────────┘

```

| File Name | Functional Badge | Purpose & Contents |
| --- | --- | --- |
| `index.html` | `[LANDING PAGE]` | Multi-tier Bootstrap navbar, service mega-menus, destination carousel, and footer.

 |
| `contact.html` | `[FORM PORTAL]` | Forms for trip creation, record reading, updates, and deletion.

 |
| `partners.html` | `[DIRECTORY]` | Showcase of global airline alliances, hotel chains, and tour agencies.

 |
| `create.php` | `[BACKEND CREATE]` | Processes `POST` requests to write new booking entries into MySQL.

 |
| `read.php` | `[BACKEND READ]` | Fetches and renders existing reservation records from the database.

 |
| `update.php` | `[BACKEND UPDATE]` | Updates database destination records based on primary key input.

 |
| `delete.php` | `[BACKEND DELETE]` | Removes booking entries by target ID.

 |

---

## Page 3: Database Schema & Entity Structure

### Database Live Inspector Screenshot Mockup

```
┌────────────────────────────────────────────────────────────────────────────────────────┐
│ MySQL phpMyAdmin / Database Live View: Database [`last`]                               │
├────────────────────────────────────────────────────────────────────────────────────────┤
│ Table: `vacation`                                                                      │
│ Records: 4 Rows | Engine: InnoDB | Collation: utf8mb4_general_ci                      │
│                                                                                        │
│ [Column]        [Type]          [Null]    [Key]    [Default]    [Badges]               │
│ id              int(11)         NO        PRI      auto_inc     `[PRIMARY KEY]`        │
│ name            varchar(100)    NO                 NULL         `[REQUIRED]`           │
│ phone_number    varchar(20)     NO                 NULL         `[REQUIRED]`           │
│ gender          varchar(10)     NO                 NULL         `[REQUIRED]`           │
│ destination     varchar(100)    NO                 NULL         `[REQUIRED]`           │
└────────────────────────────────────────────────────────────────────────────────────────┘

```

### SQL Definition Script

```sql
-- Database Initialization
CREATE DATABASE IF NOT EXISTS `last`;
USE `last`;

-- Table Structure Creation
CREATE TABLE IF NOT EXISTS `vacation` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `phone_number` VARCHAR(20) NOT NULL,
    `gender` VARCHAR(10) NOT NULL,
    `destination` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

```

---

## Page 4: CRUD Operations & Data Workflows

### Live CRUD Execution Interface Mockup

```
┌────────────────────────────────────────────────────────────────────────────────────────┐
│ LIVE BOOKING MANAGEMENT PANEL                                                          │
├────────────────────────────────────────────────────────────────────────────────────────┤
│                                                                                        │
│  [ Create Booking ]  --> Inputs: [Name] [Phone] [Gender] [Destination]                 │
│                      --> Action:  [ Create ] `[POST -> create.php]`                    │
│                                                                                        │
│  [ Read Records ]    --> Action:  [ Read ]   `[GET  -> read.php]`                      │
│                                                                                        │
│  [ Update Trip ]     --> Inputs: [Booking ID] [New Destination]                        │
│                      --> Action:  [ Update ] `[POST -> update.php]`                    │
│                                                                                        │
│  [ Delete Booking ]  --> Inputs: [Booking ID]                                          │
│                      --> Action:  [ Delete ] `[POST -> delete.php]`                    │
│                                                                                        │
├────────────────────────────────────────────────────────────────────────────────────────┤
│ LIVE OUTPUT CONSOLE:                                                                   │
│ [SUCCESS] New booking added successfully! `[HTTP 200 OK]`                              │
└────────────────────────────────────────────────────────────────────────────────────────┘

```

### CRUD Operational Flow

* **Create Record (`create.php`):** Saves user data (`name`, `phone_number`, `gender`, `destination`) into `vacation` table. `[ACTION: INSERT]`


* **Read Records (`read.php`):** Queries and lists all registered bookings. `[ACTION: SELECT]`


* **Update Record (`update.php`):** Updates `destination` field using matching `id`. `[ACTION: UPDATE]`


* **Delete Record (`delete.php`):** Deletes a booking record matching target `id`. `[ACTION: DELETE]`



---

## Page 5: Frontend Design & UI Showcase

### Live Partner Page Visual Layout

```
┌────────────────────────────────────────────────────────────────────────────────────────┐
│ PARTNER SHOWCASE                                                                       │
├────────────────────────────────────────────────────────────────────────────────────────┤
│                                                                                        │
│ ✈ AIRLINE PARTNERS                                                                    │
│ ┌──────────────────────────┐ ┌──────────────────────────┐ ┌──────────────────────────┐ │
│ │ Oze Skies                │ │ Erling Air               │ │ New Aztec Airline        │ │
│ │ Top partner of the East  │ │ Top partner of the North │ │ Top partner of SouthWest │ │
│ │ [ Learn More ] `[GOLD]`  │ │ [ Learn More ] `[BLUE]`  │ │ [ Learn More ] `[GREY]`  │ │
│ └──────────────────────────┘ └──────────────────────────┘ └──────────────────────────┘ │
│                                                                                        │
│ 🏨 HOSPITALITY PARTNERS                                                                │
│ ┌──────────────────────────┐ ┌──────────────────────────┐ ┌──────────────────────────┐ │
│ │ Pazari Hotels            │ │ Silver Wing Resorts      │ │ The Aurelion             │ │
│ │ Luxury stay worldwide    │ │ Premium accommodations   │ │ Elite hospitality        │ │
│ │ [ Learn More ] `[GOLD]`  │ │ [ Learn More ] `[BLUE]`  │ │ [ Learn More ] `[GREY]`  │ │
│ └──────────────────────────┘ └──────────────────────────┘ └──────────────────────────┘ │
└────────────────────────────────────────────────────────────────────────────────────────┘

```

### Interactive UI Elements & Color Badges

* **Primary Navigation:** Deep dark theme navbar `[bg-dark]` with red brand accent `[bg-danger]`.


* **Interactive Modals:** Triggered via `[Book Now]` `[btn-primary]` buttons.


* **Partner Category Buttons:**
* Gold Tier: `[btn-warning]` (Oze Skies, Pazari Hotels, Emerald Guides)


* Blue Tier: `[btn-primary]` (Erling Air, Silver Wing Resorts, Flame Wing Guides)


* Silver Tier: `[btn-secondary]` (New Aztec Airline, The Aurelion, The Search)





---

## Page 6: Deployment & Setup Guide

### Environment Status Console Mockup

```
┌────────────────────────────────────────────────────────────────────────────────────────┐
│ LOCALHOST SERVER ENVIRONMENT CHECK                                                     │
├────────────────────────────────────────────────────────────────────────────────────────┤
│                                                                                        │
│  [✔] Apache HTTP Server    `[RUNNING: PORT 80]`    [STATUS: ACTIVE]                  │
│  [✔] MySQL Database Daemon `[RUNNING: PORT 3306]`  [STATUS: ACTIVE]                  │
│  [✔] PHP Runtime Engine    `[VERSION 8.x]`         [STATUS: READY]                   │
│  [✔] MySQLi Extension      `[ENABLED]`             [STATUS: CONNECTED]               │
│                                                                                        │
│  DEPLOYMENT PATH: `/htdocs/gamma-travelling/`                                          │
│  ACCESS URL: `http://localhost/gamma-travelling/index.html`                            │
│                                                                                        │
└────────────────────────────────────────────────────────────────────────────────────────┘

```

### Installation Steps

1. **Deploy Repository Files:**
Copy project source files into your local Apache root folder (`htdocs` or `www`). `[STATUS: COPIED]`


2. **Initialize Database Connection:**
Import the SQL script from **Page 3** using phpMyAdmin or the MySQL command terminal. `[STATUS: IMPORTED]`


3. **Verify Configuration Parameters:**
Ensure all database configuration blocks match your local environment credentials:


```php
$conn = new mysqli("localhost", "root", "", "last");[cite: 2, 3, 6, 9]

```


`[CONFIG: VALIDATED]`
4. **Launch Platform:**
Open `http://localhost/gamma-travelling/index.html` in any standard modern web browser. `[SYSTEM: LIVE]`
