----------------1---------------------------------------
CREATE TYPE type as enum ('trainer', 'manager', 'admin');

----------------2---------------------------------------
CREATE ROLE trainer WITH LOGIN PASSWORD 'sport';
GRANT INSERT, SELECT, DELETE, UPDATE on clients to trainer;

CREATE ROLE manager WITH LOGIN PASSWORD 'sport';
GRANT INSERT, SELECT, DELETE, UPDATE on users, clients to manager;
GRANT INSERT, SELECT, UPDATE on client_trainer to manager;

CREATE ROLE admin WITH LOGIN PASSWORD 'sport';
GRANT INSERT, SELECT, DELETE, UPDATE on users, clients, addresses, money, subscriptions, client_trainer to admin;

GRANT USAGE ON SCHEMA public to trainer, manager, admin
