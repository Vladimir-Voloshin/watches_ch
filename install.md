install
=================

Installation via composer.
After composer downloads all the libs needed, launch
`php bin/console doctrine:migrations:migrate`
Then from root folder under superuser: 
`setfacl -R -m u:apache:rwx -m u:your_username:rwx var/cache var/logs
setfacl -dR -m u:apache:rwx -m u:your_username:rwx var/cache var/logs`

Application has no UI, so one have to use some REST API client (like one from Google Chrome embedded tool https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo). 

Has following routes:
    - /watch/{brand}-{model}-{sku}   - outputs JSON object, containing Watch data.
    - /watch/create                  - accepts POST data for creating new Watch
    - /watch/update                  - accepts POST data for updating Watch object
    - /watch/delete/{sku}            - deletes Watch object by sku
    - /watch/list                    - lists all the Watch objects

Personal Notes
----------------

1. Best practice: 
    - generate entities with console
    - update relations in yml-configs
    - generate and launch migration
2. Tips:
    - Native SQL execution and mapping (/src/WatchChallengeBundle/Repository/WatchRepository.php). 
        Note: models/tables should not have same name fields/columns!!!
    - Slugs with yml config
    - correct cascade delete 
3. Todos:
    - check incoming values
    - entity create/update to BaseEntity
    - BaseRepository save function
    - move BaseEntity and BaseRepository to saparate Bundle
