# Candidate App API

Laravel REST API scaffold for the Candidate Application described in the March 2026 spec.

## Included modules

- JWT-style authentication entrypoint for candidate/admin login.
- Public candidate profile, feeds, manifesto, design assets, poster templates, submissions, and daily schedule endpoints.
- Admin profile management, feeds, manifesto upload, public submission review, poster generation, asset upload, and schedule management endpoints.
- Database migration plan for candidates, feeds, manifesto documents, submissions, design assets, poster templates, generated posters, and schedule events.

## Base URL

`/api/v1`

## API structure

### Public endpoints

- `GET /api/v1/public/mandalam/{mandalam}/candidate`
- `GET /api/v1/public/candidates/{candidate}/feeds`
- `GET /api/v1/public/candidates/{candidate}/manifesto`
- `POST /api/v1/public/candidates/{candidate}/submissions`
- `GET /api/v1/public/candidates/{candidate}/design-assets`
- `GET /api/v1/public/assets/poster-templates`
- `GET /api/v1/public/candidates/{candidate}/schedule`

### Admin endpoints

- `POST /api/v1/auth/login`
- `PUT /api/v1/admin/profile`
- `POST /api/v1/admin/feeds`
- `POST /api/v1/admin/manifesto`
- `GET /api/v1/admin/submissions`
- `POST /api/v1/admin/posters/generate`
- `POST /api/v1/admin/assets/upload`
- `POST /api/v1/admin/schedule`
- `DELETE /api/v1/admin/schedule/{event}`

## Environment limitation

This repository was prepared in an offline environment where Composer could not download Laravel from Packagist. The project therefore includes a Laravel-compatible source layout and `composer.json`, but you must run `composer install` in a network-enabled environment to fetch the framework and execute the application.
