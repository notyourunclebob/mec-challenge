# Mishandling Exceptional Conditions CTF Challenge

The flag is only available with a premium account but paying for it is out of the question. Try to find an exploit to get around this.

### Build in MacOS / Linux / WSL terminal:

1. Rename .env.example to .env

2. Install php / laravel / composer if needed
    - > /bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"

    - Or just laravel (if php and composer are already installed)

    - > composer global require laravel/installer

3. Run the script
    - Change ownership if needed

    - > chmod +x start.sh

    - Run
    - > ./start.sh

4. Open in browser
    - > localhost:8080
