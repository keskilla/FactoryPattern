exemple du pattern factory

3 classes transport : avion, bus, bateau
3 classes voies  : Terre, Mer, Air
1 interface : Transport
1 classe abstraite: Courier
1 classe Client

1* changer le type de transport créé par la subclass
    -récrire la méthode sendCourier
2* créer la classe abstraite (la factory)
3* créer nos objets de transport
4* envoyer un courrier avec le client

RAF: utiliser les namespaces et use /../