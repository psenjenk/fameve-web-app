# Fameve App

A WordPress-based web application with Flask backend and Redis caching.

## Project Structure

This project consists of two main components:
1. WordPress frontend
2. Flask backend with Redis caching

### WordPress Frontend
- Standard WordPress installation with custom themes and plugins in `wp-content/`
- Core WordPress files in root directory
- Admin interface accessible at `/wp-admin`

### Flask Backend
- Python Flask application (`app.py`)
- Redis caching for improved performance
- Docker containerization for easy deployment

## Prerequisites

- Docker and Docker Compose
- Git
- PHP 7.4 or higher
- MySQL 5.7 or higher
- WordPress CLI (optional)

## Setup and Installation

1. Clone the repository:
```bash
git clone [repository-url]
cd fameve-app
```

2. Configure WordPress:
   - Copy `wp-config-sample.php` to `wp-config.php`
   - Update database credentials and other settings in `wp-config.php`:
     ```php
     define('DB_NAME', 'your_database_name');
     define('DB_USER', 'your_database_user');
     define('DB_PASSWORD', 'your_database_password');
     define('DB_HOST', 'localhost');
     define('DB_CHARSET', 'utf8mb4');
     define('DB_COLLATE', '');
     ```
   - Set up security keys in `wp-config.php`
   - Configure Redis connection settings

3. Start the application using Docker Compose:
```bash
docker-compose up --build
```

The application will be available at:
- WordPress frontend: http://localhost:8000
- Flask backend: http://localhost:8000

## WordPress Configuration

### Active Themes
The project includes several themes:
- `fameve-app/` - Custom theme for the main application
- `astra/` - Popular multipurpose theme
- `the-launcher/` - Coming soon page theme
- Default WordPress themes (twenty-twenty series)

### Active Plugins
Essential plugins included:
- `wpforms-lite/` - Contact form builder
- `wp-github-sync/` - GitHub integration
- `ultimate-addons-for-gutenberg/` - Enhanced Gutenberg blocks
- `presto-player/` - Video player
- `astra-sites/` - Theme demo importer
- `akismet/` - Spam protection

### Theme Development
To modify the custom theme:
1. Navigate to `wp-content/themes/fameve-app/`
2. Edit template files in the theme directory
3. Use WordPress child theme for customizations
4. Test changes in a staging environment

### Plugin Management
- Install new plugins through WordPress admin or manually in `wp-content/plugins/`
- Keep plugins updated for security and performance
- Use compatible versions with WordPress core

## Development

### Backend Development
The Flask backend provides a simple API endpoint that demonstrates Redis caching:
- `/` - Returns a hit counter that persists across requests using Redis

### Frontend Development
WordPress development can be done by:
1. Modifying themes in `wp-content/themes/`
2. Adding plugins in `wp-content/plugins/`
3. Customizing WordPress configuration in `wp-config.php`

## Docker Configuration

The project uses Docker Compose with two services:
- `web`: Flask application container
- `redis`: Redis cache container

### Ports
- 8000:5000 - Maps container port 5000 to host port 8000

## Deployment Guidelines

### Local Development
1. Use Docker Compose for local development
2. Enable WordPress debug mode in `wp-config.php`:
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   ```
3. Use local database for development

### Staging Environment
1. Set up a staging server with similar configuration
2. Use staging-specific database
3. Enable error logging
4. Test all features before production deployment

### Production Deployment
1. Configure production database
2. Disable debug mode
3. Set up SSL certificates
4. Configure proper security headers
5. Set up automated backups
6. Enable caching plugins
7. Configure CDN if needed

### Performance Optimization
1. Enable Redis object caching
2. Configure browser caching
3. Optimize images and assets
4. Use a CDN for static content
5. Enable GZIP compression

## Dependencies

### Python Dependencies
- Flask
- Redis

### WordPress Dependencies
- Standard WordPress core files
- Custom themes and plugins in wp-content directory
- PHP extensions:
  - mysqli
  - curl
  - gd
  - xml
  - zip

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## License

This project is licensed under the terms specified in the `license.txt` file.
