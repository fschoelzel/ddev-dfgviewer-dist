# DDEV System for DFG Viewer

This DDEV system installs DFG Viewer based solely on its distribution package.

A more comprehensive DDEV system based on database dumps is available at https://github.com/slub/ddev-dfgviewer.

## Getting Started

```bash
git clone https://github.com/beatrycze-volk/ddev-dfgviewer-dist.git
cd ddev-dfgviewer-dist

ddev start
ddev check-install
ddev launch '/viewer?tx_dlf[id]=viewer?tx_dlf%5Bid%5D=https%3A%2F%2Fdigital.slub-dresden.de%2Fdata%2Fkitodo%2FTheDarea_416971482-19100223%2FTheDarea_416971482-19100223_mets.xml'
```

## Other Commands

```bash
# Start over
ddev reset
```

## URLs

- Backend Login: https://dfgviewer-dist.ddev.site/typo3/
  - User: `admin`
  - Password: `adminslub`
- phpMyAdmin: [https://dfgviewer-dist.ddev.site:8037](https://dfgviewer-dist.ddev.site:8037)
