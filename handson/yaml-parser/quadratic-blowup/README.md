# Quadratic blowup on PyYAML

```
$ docker build . -t quadratic-blowup-pyyaml
$ docker run quadratic-blowup-pyyaml
Collecting PyYaml
  Downloading PyYAML-5.4.1-cp39-cp39-manylinux1_x86_64.whl (630 kB)
Installing collected packages: PyYaml
WARNING: Running pip as the 'root' user can result in broken permissions and conflicting behaviour with the system package manager. It is recommended to use a virtual environment instead: https://pip.pypa.io/warnings/venv
Successfully installed PyYaml-5.4.1
CPU: 0.0 %, Memory: 5772 KB
CPU: 100 %, Memory: 10296 KB
CPU: 100 %, Memory: 165864 KB
CPU: 100 %, Memory: 507516 KB
CPU: 100 %, Memory: 843240 KB
CPU: 100 %, Memory: 1177200 KB
CPU: 101 %, Memory: 1592756 KB
CPU: 102 %, Memory: 1608460 KB
CPU: 101 %, Memory: 1604040 KB
./run.sh: line 13:    10 Killed                  python vulnerable.py
CPU:  %, Memory:  KB
```
