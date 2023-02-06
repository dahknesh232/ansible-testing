# Ansible-Testing

This is a simple repo for ansible testing.

# Installation

Assuming you have Ubuntu 20.04 installed across 5 servers- you can copy this repo to deploy playbooks from the `playbooks` directory.

```bash
sudo apt install ansible
cd /your/ansible/project/directory
git clone this@repo.git
cd playbooks
```


## Modify `manifest`

```bash
cd ../
sudo nano manifest
```
Change listed IP addresses to your server IPS

## Add SSH Key
*You do not have to use ed25519, you may use whatever ssh-key type you like*

If you have not created an ssh key do the following:
```bash
ssh-keygen -t ed25519
```


You will see the following prompts, input your desired path to ssh keys, and for password-less deployment, hit enter for passphrase:
```bash
Generating public/private ed25519 key pair.
Enter file in which to save the key (/home/$USER/.ssh/id_ed25519): /path/to/ssh/directory/ansi-key
Enter passphrase (empty for no passphrase): 
Enter same passphrase again: 
Your identification has been saved in /path/to/ssh/ansi-key
Your public key has been saved in /path/to/ssh/ansi-key.pub
The key fingerprint is:
SHA256:<cool gibberish>
+--[ED25519 256]--+
| there will      |
|    be           |
|           some  |
|cool             |
|    looking      |
|           random|
|          art    |
|  in     this    |
|        BOX      |
+----[SHA256]-----+
```
## COPY PUBLIC SSH KEY TO `bootstrap.yml`
The `.pub` is important, be sure you are copying the public key ad not the private key
```bash
cat /path/to/ssh/keys/ansi-key.pub
```
Copy the output
```bash
ssh-ed25519 bunchastuffgoeshereblahpublickey ansi-key
```
Paste the output in `boostrap.yml` under the *add ssh key for dev* task so that:
```bash
  - name: add ssh key for dev
    tags: always
    authorized_key:
      user: dev
      key:""
```
Becomes:
```bash
  - name: add ssh key for dev
    tags: always
    authorized_key:
      user: dev
      key: "ssh-ed25519 bunchastuffgoeshereblahpublickey ansi-key"
```
replacing ```ssh-ed25519 bunchastuffgoeshereblahpublickey ansi-key``` with yuour actual key content

# Check if you can access servers

If you follwed the instructions located @ [https://docs.ansible.com/ansible/latest/installation_guide/index.html](https://docs.ansible.com/ansible/latest/installation_guide/index.html)
we will assume you have ansible running on your workstation.

Check that you have configured you inventory file > `manifest` correctly by entering this command from the `playbooks` directory:

```bash
ansible all -m ping
```
You should see something along the lines of this:

```bash
<YOUR_SERVER_IP> | SUCCESS => {
    "ansible_facts": {
        "discovered_interpreter_python": "/usr/bin/python3"
    },
    "changed": false,
    "ping": "pong"
}
<YOUR_SERVER2_IP> | SUCCESS => {
    "ansible_facts": {
        "discovered_interpreter_python": "/usr/bin/python3"
    },
    "changed": false,
    "ping": "pong"
}
```
If that is working well you can move on to:
```bash
ansible-playbook <playbookname>.yml
```
Hope it works, let me know if it doesnt!

# Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[GNU GPL](https://www.gnu.org/licenses/gpl-3.0.html)
