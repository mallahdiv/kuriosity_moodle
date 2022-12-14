FROM ubuntu/apache2:latest
RUN apt update
RUN apt-get install dialog
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get install apache2 php libapache2-mod-php -y
RUN apt install graphviz ghostscript clamav php-pspell php-curl php-gd php-intl php-mysql php-xml php-xmlrpc php-ldap php-zip php-soap php-mbstring -y
RUN service apache2 restart
RUN mkdir /var/moodledata
RUN echo "php_value max_input_vars 5000" > /var/www/html/.htaccess
RUN chown -R www-data /var/moodledata
RUN chmod -R 777 /var/moodledata
RUN chmod -R 0755 /var/www/html/
COPY moodle_source_code /var/www/html/
RUN rm -f /var/www/html/index.html
EXPOSE 80