# CarpetExpert.online

CarpetExpert.online is a website dedicated to providing expert advice on carpet cleaning, particularly focusing on pet-related stains and odors.

## Project Structure

For a detailed overview of the project structure, please refer to the [structure.md](structure.md) file.

## Requirements

- PHP 7.4 or higher
- A web server (e.g., Apache, Nginx)

## Running the Project Locally

1. **Install a local web server stack**
   - For Windows: You can use [XAMPP](https://www.apachefriends.org/index.html) or [WampServer](https://www.wampserver.com/en/)
   - For macOS: You can use [MAMP](https://www.mamp.info/en/mac/)
   - For Linux: You can install Apache and PHP separately using your distribution's package manager

2. **Clone the repository**
   ```
   git clone git@github.com:Paragona/carpetexpert.online.git
   ```

3. **Move the project files to your web server's document root**
   - For XAMPP: `C:\xampp\htdocs\carpet-expert-online`
   - For MAMP: `/Applications/MAMP/htdocs/carpet-expert-online`
   - For Linux: `/var/www/html/carpet-expert-online`

4. **Start your local web server**
   - For XAMPP: Start Apache from the XAMPP Control Panel
   - For MAMP: Start the servers from the MAMP application
   - For Linux: Start the Apache service (e.g., `sudo service apache2 start`)

5. **Access the website**
   Open your web browser and navigate to:
   ```
   http://localhost/carpet-expert-online/
   ```
   If you're using a different port (e.g., MAMP often uses 8888), use:
   ```
   http://localhost:8888/carpet-expert-online/
   ```

## Deployment

To deploy this website to a live server:

1. Upload all files to your web hosting server using FTP or your hosting provider's file manager.
2. Ensure that your server meets the PHP version requirements.
3. Configure your domain to point to the directory containing these files.

## Contributing

If you'd like to contribute to this project, please fork the repository and create a pull request with your changes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any questions or concerns, please open an issue on the [GitHub repository](https://github.com/Paragona/carpetexpert.online).
