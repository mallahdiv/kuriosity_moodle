# FROM ubuntu:latest

#RUN apt-get update
#RUN apt-get install software-properties-common -y
#RUN add-apt-repository ppa:ondrej/php
#RUN apt-get update
#RUN apt-get install dialog
#ARG DEBIAN_FRONTEND=noninteractive
#RUN apt-get install apache2 mysql-client php7.4 libapache2-mod-php -y
# RUN cd /etc/apache2 && echo "ServerName localhost" >> apache2.conf

#RUN apt install graphviz ghostscript clamav php-pspell php-curl php-gd php-intl php-mysql php-xml php-xmlrpc php-ldap php-zip php-soap php-mbstring -y
#RUN service apache2 restart
#RUN cd /opt
#RUN mkdir moodle
#COPY . /opt/moodle
#RUN cp -R /opt/moodle /var/www/html/
#RUN mkdir /var/moodledata
#RUN chown -R www-data /var/moodledata
#RUN chmod -R 777 /var/moodledata
#RUN chmod -R 0755 /var/www/html/moodle
#EXPOSE 80
#CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
# ENTRYPOINT [ "service apache2 restart" ]
--------

FROM ubuntu/apache2:latest
RUN apt update
# RUN apt-get install software-properties-common -y
# RUN add-apt-repository ppa:ondrej/php
RUN apt-get install dialog
ARG DEBIAN_FRONTEND=noninteractive
# RUN apt-get update
RUN apt-get install apache2 mysql-client php libapache2-mod-php -y
# RUN cd /etc/apache2 && echo "ServerName localhost" >> apache2.conf

RUN apt install graphviz ghostscript clamav php-pspell php-curl php-gd php-intl php-mysql php-xml php-xmlrpc php-ldap php-zip php-soap php-mbstring -y
RUN service apache2 restart
# RUN cd /opt
# RUN mkdir moodle
# COPY . /opt/moodle
# RUN cp -R /opt/moodle /var/www/html/
RUN mkdir /var/moodledata
RUN mkdir /var/www/html/moodle
RUN chown -R www-data /var/moodledata
RUN chmod -R 777 /var/moodledata
RUN chmod -R 0755 /var/www/html/moodle
COPY moodle_source_code /var/www/html/moodle
RUN sed -i '1s/^/ServerName localhost\n/' /etc/apache2/apache2.conf
EXPOSE 80
#CMD ["apache2", "-D", "FOREGROUND"]
#ENTRYPOINT ["/etc/init.d/apache2 start"]
#CMD ["/etc/init.d/apache2", "start", "-D", "FOREGROUND"]
#RUN chmod 777 /etc/apache2/envvars
#RUN ./etc/apache2/envvars
#CMD ["apache2", "-D", "FOREGROUND"]

