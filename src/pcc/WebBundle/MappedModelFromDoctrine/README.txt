En este directorio se guardará al mapeado intermedio que se necesita para generar las
entidades en el ORM importando desde una base de datos con bin/console doctrine:mapping:convert


 //MAPEAMOS
 ./console doctrine:mapping:convert xml {ESTE DIRECTORIO} --from-database -f

 //IMPORTAMOS
  ./console doctrine:mapping:import BlogBundle yml

 //GENERAMOS ENTIDADES.
 ./console doctrine:generate:entities BlogBundle
