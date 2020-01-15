# Troubleshooting

## Connectivity

### Error: wrong signature type 

Full error message: `error:1414D172:SSL routines:tls12_check_peer_sigalg:wrong signature type`

This error is thown when there is a connectivity issue with the Payvision payment servers.
Due to compatibility reasons the servers currently only support openssl security level 1.

Some newer systems (like Debian Buster) increased their default security level to level 2, which makes it impossible to connect.
See: https://wiki.debian.org/ContinuousIntegration/TriagingTips/openssl-1.1.1

As a temporary workaround, the security level on a Debian Buster system can be lowered by updating a line in the `/etc/ssl/openssl.cnf` file.  
Change the line  

    CipherString = DEFAULT@SECLEVEL=2
    
to

    CipherString = DEFAULT@SECLEVEL=1

Revert the change once the Payvision servers are openssl level 2 compatible.
