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

## Setup and Installation

1. Clone the repository:
```bash
git clone [repository-url]
cd fameve-app
```

2. Configure WordPress:
   - Copy `wp-config-sample.php` to `wp-config.php`
   - Update database credentials and other settings in `wp-config.php`

3. Start the application using Docker Compose:
```bash
docker-compose up --build
```

The application will be available at:
- WordPress frontend: http://localhost:8000
- Flask backend: http://localhost:8000

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

## Dependencies

### Python Dependencies
- Flask
- Redis

### WordPress Dependencies
- Standard WordPress core files
- Custom themes and plugins in wp-content directory

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## License

This project is licensed under the terms specified in the `license.txt` file.
